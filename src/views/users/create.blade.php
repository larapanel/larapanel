@component('larapanel::panel.layouts.component', ['title' => 'ایجاد کاربر'])

    @slot('style')
    @endslot

    @slot('subject')
        <h1>
            <i class="fa fa-user"></i> ایجاد کاربر
        </h1>
        <p>این بخش
            برای ایجاد کاربر جدید
            است.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('roles-assignment.index') }}">همه کاربران</a></li>
        <li class="breadcrumb-item">ایجاد کاربر</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('larapanel::components.accordion')
                    @slot('cards')
                        @component('larapanel::components.collapse-card', ['id' => 'user_create', 'show' => 'show', 'title' => 'ایجاد کاربر جدید'])
                            @slot('body')
                                <form method="POST"
                                      action="{{ route('users.store') }}" autocomplete="off">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="username"><strong>نام‌کاربری</strong></label>
                                                <input class="form-control  @error('username') is-invalid @enderror"
                                                       name="username" id="username" value="{{ old('username') }}" style="direction: ltr"
                                                       autocomplete="off">

                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="email"><strong>{{ __('ایمیل') }}</strong></label>
                                                <input id="email" type="text" style="direction: ltr"
                                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                                       value="{{ old('email') }}" autocomplete="off">

                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <span class="text-danger">*</span>
                                                <label for="password"><strong>{{ __('رمز عبور') }}</strong></label>
                                                <input id="password" type="text" style="direction: ltr"
                                                       class="form-control @error('password') is-invalid @enderror"
                                                       name="password" autocomplete="off">

                                                @error('password')
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
                                                       name="first_name" id="first_name"
                                                       value="{{ old('first_name') }}" autocomplete="off">
                                                @error('first_name')
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
                                                <input class="form-control @error('last_name') is-invalid @enderror"
                                                       name="last_name" id="last_name"
                                                       value="{{ old('last_name') }}" autocomplete="off">
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
                                                <input id="mobile" type="text" style="direction: ltr"
                                                       class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                       value="{{ old('mobile') }}"
                                                       autocomplete="off">

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
                                                <select name="gender" id="gender"
                                                        class="form-control select2 @error ('gender') is-invalid @enderror">
                                                    <option value="">انتخاب نمایید</option>
                                                    <option value="female"
                                                            {{ old('gender') == 'female' ? 'selected' : '' }} name="gender">خانم
                                                    </option>
                                                    <option value="male"
                                                            {{ old('gender') == 'male' ? 'selected' : '' }} name="gender">آقا
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6"><label for="nid"><strong>{{ __('کد‌ملی') }}</strong></label>
                                            <input id="nid" type="text" style="direction: ltr"
                                                   class="form-control @error('nid') is-invalid @enderror" name="nid"
                                                   value="{{ old('nid') }}"
                                                   autocomplete="off">

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
                                                    @forelse($provinces as $province)
                                                        <option
                                                            value="{{$province->id}}" {{ old('province_id') == $province->id ? 'selected' : '' }}>
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
                                                <input id="city" type="text"
                                                       class="form-control @error('city') is-invalid @enderror"
                                                       name="city" autocomplete="off" value="{{ old( 'city') }}">

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
                                                <input id="postal_code" type="text" style="direction: ltr"
                                                       class="form-control @error('postal_code') is-invalid @enderror"
                                                       name="postal_code"
                                                       value="{{ old( 'postal_code') }}"
                                                       autocomplete="off">

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
                                                    <input id="address" type="text"
                                                           class="form-control @error('address') is-invalid @enderror"
                                                           name="address" value="{{ old( 'address') }}" autocomplete="off">

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
