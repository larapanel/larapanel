@component('vendor.larapanel.panel.layouts.component', ['title' => 'ویرایش کاربر'])

    @slot('style')
    @endslot

    @slot('subject')
        <h1>
            <i class="fa fa-user"></i> ویرایش کاربر
        </h1>

        <p>این بخش
            برای ویرایش کاربر
            است.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('roles-assignment.index') }}">همه کاربران</a></li>
        <li class="breadcrumb-item">ویرایش کاربر</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('vendor.larapanel.components.accordion')
                    @slot('cards')
                        @component('vendor.larapanel.components.collapse-card', ['id' => 'user_edit', 'show' => 'show', 'title' => 'ویرایش کاربر'])
                            @slot('body')
                                <form method="POST"
                                      action="{{ route('users.update', $user) }}" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="username"><strong>نام‌کاربری</strong></label>
                                                <input disabled class="form-control" name="username" id="username"
                                                       style="direction: ltr" value="{{ $user->username ?? old('username') }}" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="email"><strong>{{ __('ایمیل') }}</strong></label>
                                                <input id="email" type="text" style="direction: ltr" class="form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ $user->email ?? old('email') }}" autocomplete="off">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="first_name"><strong>{{ __('نام') }}</strong></label>
                                                <input class="form-control @error('first_name') is-invalid @enderror"
                                                       name="first_name" id="first_name" value="{{ $user->first_name ?? old('first_name') }}" autocomplete="off">
                                                @error('first-name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="last_name"><strong>{{ __('نام‌خانوادگی') }}</strong></label>
                                                <input class="form-control @error('last_name') is-invalid @enderror" name="last_name" id="last_name"
                                                       value="{{ $user->last_name ?? old('last_name') }}" autocomplete="off">
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="mobile"><strong>{{ __('تلفن‌همراه') }}</strong></label>
                                                <input id="mobile" type="text" style="direction: ltr" class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                       value="{{ $user->mobile ?? old('mobile') }}" autocomplete="off">

                                                @error('mobile')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-primary">
                                                <label for="gender"><strong>{{ __('جنسیت') }}</strong></label>
                                                <select name="gender" id="gender" class="form-control select2 @error ('gender') is-invalid @enderror">
                                                    <option value="">انتخاب نمایید</option>
                                                    <option value="female"@if( old('gender' , $user->gender) == 'female') selected="selected" @endif>خانم</option>
                                                    <option value="male"@if(old('gender', $user->gender) == 'male') selected="selected" @endif>آقا</option>
                                                </select>
                                                @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6"><label for="nid"><strong>{{ __('کد‌ملی') }}</strong></label>
                                            <input id="nid" type="text" style="direction: ltr" class="form-control @error('nid') is-invalid @enderror"
                                                   name="nid" value="{{ $user->nid ?? old('nid') }}" autocomplete="off">

                                            @error('nid')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group has-primary">
                                                <label for="province_id"><strong>{{ __('استان') }}</strong></label>
                                                <select name="province_id" id="province_id"
                                                        class="select2 form-control @error('province_id') is-invalid @enderror">
                                                    <option value="">انتخاب نمایید</option>
                                                    @forelse( $provinces as $province)
                                                        <option value="{{ $province->id }}"
                                                                @if( old('province_id', $user->province_id) == $province->id ) selected="selected" @endif>
                                                            {{ $province->title }}</option>
                                                    @empty
                                                    @endforelse
                                                </select>

                                                @error('province_id')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="city"><strong>{{ __('شهر') }}</strong></label>
                                                <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                                                       name="city" value="{{ $user->city ?? old('city') }}" autocomplete="off">

                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="postal_code"><strong>{{ __('کد پستی') }}</strong></label>
                                                <input id="postal_code" type="text" style="direction: ltr" class="form-control @error('postal_code') is-invalid @enderror"
                                                       name="postal_code" value="{{ $user->postal_code ?? old('postal_code') }}" autocomplete="off">

                                                @error('postal_code')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="address"><strong>نشانی</strong></label>
                                                    <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                                                           name="address" value="{{ $user->address ?? old('address') }}"  name="user_type" autocomplete="off">

                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="py-3">
                                        <button class="btn btn-success" type="submit">ثبت</button>
                                    </div>
                                </form>
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent
            </div>
        </div>

    @endslot

    @slot('script')
        <script>
            $(".select2").select2({
                theme: "bootstrap"
            });
        </script>
    @endslot

@endcomponent
