<?php

namespace Larapanel\Larapanel\Http\Controllers\Panel\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Plank\Mediable\Media;

class AccountController extends Controller
{
    public function edit(User $account)
    {
        if(Auth::user()->getMedia('profile_image')->count() > 0) {
            $imageUrl = Auth::user()->getMedia('profile_image')->first()->getUrl();
        } else {
            $imageUrl = null;
        }
        return view('larapanel::panel.account.edit', compact('account','imageUrl'));
    }

    public function update(Request $request, User $account)
    {
        $data = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', Rule::unique('users')->ignore($account->id)],
            'mobile' => ['required', 'regex:/^09\d{9}$/', 'digits:11', 'numeric'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'two_factor_status' => ['required', 'in:off,sms,email'],
        ]);

        DB::beginTransaction();
        try {
            $account->update($data);
            DB::commit();
            session()->flash('success', 'با موفقیت بروزرسانی شد.');
        } catch (\Exception $e) {
            DB::rollBack();
            session()->flash('warning', 'بروزرسانی با خطا مواجه شد.');
        }

        return back();
    }

    public function getImage(Request $request)
    {
        $user = [];
        if(auth()->check()) {
            $user = $request->user();
        } else {
            abort(403);
        }

        if($user->getMedia('profile_image')->count() > 0) {
            $imageUrl = $user->getMedia('profile_image')->first()->getUrl();
        } else {
            $imageUrl = '';
        }

        return response()->json(['status' => 200, 'image' => $imageUrl]);

    }

    public function setImage(Request $request)
    {
        $userObject = [];
        if(auth()->check()) {
            $userObject = User::query()->find(auth()->user()->id);
        } else {
            abort(403);
        }
        if (preg_match('/^data:image\/(\w+);base64,/', $request->image, $type)) {
            $data = substr($request->image, strpos($request->image, ',') + 1);
            $type = strtolower($type[1]); // jpg, jpeg, png, ...

            if (!in_array($type, [ 'jpg', 'jpeg','png' ])) {
                return response()->json(['status' => 422, 'message' => 'نوع فایل انتخابی مجاز نمی‌باشد.']);
            }
            $data = str_replace( ' ', '+', $data );
            $data = base64_decode($data);

            if ($data === false) {
                return response()->json(['status' => 422, 'message' => 'عملیات بارگذاری با خطا مواجه شد.']);
            }
        } else {
            return response()->json(['status' => 422, 'message' => 'عملیات بارگذاری با خطا مواجه شد.']);
        }
        $file = $this->generateFile($type);

        file_put_contents($file, $data);

        $mime = getimagesize($file)['mime'];
        $size = filesize($file);
        $imageName = $imageName = $this->generateName();
        $directory = jdate()->format('Y/m');

        if(!empty($userObject) && $userObject->getMedia('profile_image')->count() > 0) {
            $oldProfileId = $userObject->getMedia('profile_image')->first();
            // Remove file from hard disk.
            $media = Media::query()->find($oldProfileId->id);
            Storage::disk('public')->delete($media->getDiskPath());

            DB::table('media')->where('id', '=', $oldProfileId->id)->update([
                'disk' => 'public',
                'directory' => $directory,
                'filename' => $imageName,
                'extension' => $type,
                'mime_type' => $mime,
                'aggregate_type' => 'image',
                'size' => $size,
                'upload_via' => 'default',
                'updated_at' => now()->toDateTimeString(),
            ]);
        } else {
            $uploaded = DB::table('media')->insertGetId([
                'disk' => 'public',
                'directory' => $directory,
                'filename' => $imageName,
                'extension' => $type,
                'mime_type' => $mime,
                'aggregate_type' => 'image',
                'size' => $size,
                'upload_via' => 'default',
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ]);
            $userObject->syncMedia($uploaded, 'profile_image');
        }

        return response()->json(['status' => 200, 'message' => 'بارگذاری تصویر با موفقیت انجام شد.']);
    }

    public function generateFile($type)
    {
        $imageName = $this->generateName();
        $year_path = storage_path('app/public/' . jdate()->format('Y'));
        $path = storage_path('app/public/' . jdate()->format('Y')) . '/' . jdate()->format('m');
        if (!is_dir($year_path)){
            mkdir($year_path);
        }
        if (!is_dir($path)){
            mkdir($path);
        }

        $path = storage_path('app/public/' . jdate()->format('Y/m/'));

        return $path . $imageName . '.' . $type;
    }

    public function generateName()
    {
        $userId = $this->alphabeticalConvert(str_pad(auth()->user()->id, 7, 0, STR_PAD_LEFT));
        $imageName = jdate()->format('dmYsiH') . $userId;
        return $imageName;
    }

    public function alphabeticalConvert($characters)
    {
        $alphabetic = [0 => 'z', 1 => 'y', 2 => 'x', 3 => 'w', 4 => 'v', 5 => 'u', 6 => 't', 7 => 's', 8 => 'r', 9 => 'q'];
        $charactersLength = strlen($characters);
        $convertedString = '';
        for($i = 0; $i < $charactersLength; $i++) {
            $convertedString .= $alphabetic[$characters[$i]];
        }
        return $convertedString;
    }
}
