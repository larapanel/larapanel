@component('home.layouts.component-auth', ['title' => 'تغییر رمز عبور'])

    @slot('style')

    @endslot

    @slot('content')

        <div class="">
            <div class="text-center mb-4 text-primary">
                <h4>
                    <strong>{{ __('تغییر رمز عبور') }}</strong>
                </h4>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('ایمیل') }}</label>
                    <input id="email" type="email"
                           class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-0">
                    <div class="pt-4 pb-2">
                        <button type="submit" class="btn btn-primary d-block w-100">
                            {{ __('ارسال') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>

    @endslot

    @slot('script')

    @endslot

@endcomponent
