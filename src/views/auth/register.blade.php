@component('vendor.larapanel.panel.layouts.component-auth', ['title' => 'ثبت حساب‌کاربری'])

    @slot('style')
    @endslot

    @slot('content')
        <div class="">
            <div class="text-center mb-4 text-primary">
                <h4>
                    <strong>{{ __('ثبت حساب کاربری') }}</strong>
                </h4>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{--<div class="form-group">
                    <label for="name">{{ __('نام') }}</label>
                    <input id="first_name" type="text"
                           class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                           value="{{ old('first_name') }}" required>

                    @error('first_name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>--}}

                {{--<div class="form-group">
                    <label for="name">{{ __('نام‌خانوادگی') }}</label>
                    <input id="last_name" type="text"
                           class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                           value="{{ old('last_name') }}" required>

                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>--}}

                <div class="form-group">
                    <label for="username">نام‌کاربری</label>
                    <input id="username" type="text"
                           class="form-control @error('username') is-invalid @enderror"
                           name="username" value="{{ old('username') }}" required>

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="email">{{ __('ایمیل') }}</label>
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('رمز عبور') }}</label>
                    <input id="password" type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password" required>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('تکرار رمز عبور') }}</label>
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required>
                </div>

                <div class="form-group mb-0">
                    <div class="pt-4 pb-2">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('ثبت‌نام') }}
                        </button>
                    </div>
                </div>
            </form>

            <div class="mt-3">
                <span><strong>قبلا ثبت‌نام کرده‌اید؟ </strong></span>
                <a class="pl-lg-2" href="{{ route('login') }}">
                    {{ __('ورود به حساب کاربری') }}
                </a>
            </div>
        </div>
    @endslot

    @slot('script')

    @endslot

@endcomponent
