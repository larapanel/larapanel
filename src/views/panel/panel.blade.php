@component('larapanel::panel.layouts.component', ['title' => 'پنل مدیریت'])

    @slot('style')
        {{-- <style></style> --}}
    @endslot

    @slot('subject')
        <h1><i class="fa fa-dashboard"></i> پنل مدیریت</h1>
        <p>به ITAfza خوش آمدید.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item">پنل مدیریت</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="alert alert-dismissible alert-primary">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    {{ auth()->user()->first_name }} عزیز، به ITAfza خوش آمدید
                </div>
            </div>
        </div>
    @endslot

    @slot('script')
    @endslot

@endcomponent


