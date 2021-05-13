<?php

namespace Larapanel\Larapanel\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Plank\Mediable\Facades\MediaUploader;
use Plank\Mediable\Media;
use Plank\Mediable\SourceAdapters\SourceAdapterInterface;

class TinymceMediaController extends Controller
{
    public function __invoke(Request $request)
    {
        $media = MediaUploader::fromSource($request->file('file'))
            ->toDestination('public', jdate()->format('Y') . '/' . jdate()->format('m'))
            ->beforeSave(function (Media $model, SourceAdapterInterface $source) {
                $model->setAttribute('upload_via', 'editor');
            })
            ->upload();
        $response = response()->json(['location' => Storage::disk('public')->url($media->getDiskPath())]);
        return $response;
    }
}
