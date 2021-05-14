@component('vendor.larapanel.panel.layouts.component-auth', ['title' => 'تایید حساب‌کاربری'])

    @slot('style')

    @endslot

    @slot('content')

                        <div class="">
                            <div class="text-center mb-4 text-primary">
                                <h4>
                                    <strong>{{ __('لطفا آدرس ایمیل خود را تأیید نمایید') }}</strong>
                                </h4>
                            </div>

                            <div class="text-justify">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('لینک فعال‌سازی جدیدی برای ایمیل شما ارسال گردید.') }}
                                    </div>
                                @endif

                                {{ __('لطفا برای ادامه فعالیت در سایت، لینک فعال‌سازی ارسال شده را تایید نمایید.') }}
                                {{ __('اگر ایمیل را دریافت نکرده‌اید،') }}
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline">{{ __('بر روی این لینک کلیک نمایید.') }}</button>
                                </form>
                            </div>
                        </div>

    @endslot

    @slot('script')

    @endslot

@endcomponent
