@component('vendor.larapanel.panel.layouts.component-auth', ['title' => 'بازنشانی رمز عبور'])

    @slot('style')
    @endslot

    @slot('content')
        <div class="">
            <div class="text-center mb-4 text-primary">
                <h4>
                    <strong>{{ __('بازنشانی رمز عبور') }}</strong>
                </h4>
            </div>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group">
                    <label for="email">{{ __('ایمیل') }}</label>
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ $email ?? old('email') }}" required autocomplete="email"
                           autofocus>

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
                           name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password-confirm">{{ __('تکرار رمز عبور') }}</label>
                    <input id="password-confirm" type="password" class="form-control"
                           name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="form-group mb-0">
                    <div class="pt-4 pb-2">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('ثبت') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    @endslot

    @slot('script')

    @endslot

@endcomponent
