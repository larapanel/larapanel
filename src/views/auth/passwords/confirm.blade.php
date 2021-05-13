@component('home.layouts.component-auth', ['title' => 'تایید رمز عبور'])

    @slot('style')
    @endslot

    @slot('content')
        {{--<div class="logo">
            <h1>وبسایت</h1>
        </div>--}}
{{--        <div class="lock-box">--}}
            <img class="rounded-circle user-image" src="http://placeimg.com/100/100/nature/sepia">

            <h4 class="text-center user-name my-3">{{ auth()->user()->full_name }}</h4>
            <p class="text-center text-muted">{{ __('لطفا قبل از ادامه، رمز عبور خود را تایید نمایید.') }}</p>
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="form-group">
                    <label for="password">{{ __('رمز عبور') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group btn-container">
                    <div class="mb-4">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('تایید رمز عبور') }}
                        </button>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}">
                            {{ __('رمز عبور خود را فراموش کرده‌ام') }}
                        </a>
                    @endif
                </div>
            </form>
{{--        </div>--}}
    @endslot

    @slot('script')

    @endslot

@endcomponent
