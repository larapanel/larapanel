@component('vendor.larapanel.panel.layouts.component-auth', ['title' => 'ورود به حساب‌کاربری'])

    @slot('style')
    @endslot

    @slot('content')
        <div class="">
            <div class="text-center mb-4 text-primary">
                <h4>
                    <strong>{{ __('ورود به حساب کاربری') }}</strong>
                </h4>
            </div>
            <form method="POST" autocomplete="off" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="username">نام کاربری</label>
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

                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">
                        {{ __('مرا به خاطر داشته باش') }}
                    </label>
                    {{--<div class="invalid-feedback">Example invalid feedback text</div>--}}
                </div>

                <div class="form-group mb-0">
                    <div class="pt-4 pb-2">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('ورود') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="my-3">
                            <a href="{{ route('password.request') }}">
                                {{ __('رمز عبور خود را فراموش کرده‌ام') }}
                            </a>
                        </div>
                    @endif
                </div>
            </form>
            <div>
                <span><strong>کاربر جدید هستید؟ </strong></span>
                <a class="pl-lg-2" href="{{ route('register') }}">
                    {{ __('ایجاد حساب کاربری') }}
                </a>
            </div>
        </div>
    @endslot

    @slot('script')

    @endslot

@endcomponent
