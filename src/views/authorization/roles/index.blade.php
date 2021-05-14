@component('vendor.larapanel.panel.layouts.component', ['title' => 'نقش‌ها'])

    @slot('style')
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> نقش‌ها </h1>
        <p>لیست نقش‌های تعریف شده برای مدیریت سطوح دسترسی.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('roles-assignment.index') }}">سطوح دسترسی</a></li>
        <li class="breadcrumb-item">نقش‌ها</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('vendor.larapanel.components.accordion')
                    @slot('cards')
                        @component('vendor.larapanel.components.collapse-card' , ['id' => 'role_index', 'show' => 'show', 'title' => 'لیست نقش‌ها'])
                            @slot('body')
                                @component('vendor.larapanel.components.collapse-search')
                                    @slot('form')
                                        <form class="clearfix">
                                            <div class="form-group">
                                                <label for="text-name-input">نام کاربر</label>
                                                <input type="text" class="form-control" id="text-name-input" placeholder="نام کاربر">
                                            </div>
                                            <button type="submit" class="btn btn-primary float-left">جستجو</button>
                                        </form>
                                    @endslot
                                @endcomponent

                                <div class="mt-4">
                                    <a href={{ route('roles.create') }} type="button" class="btn btn-primary"><i class="fa fa-plus"></i> ایجاد نقش</a>
                                </div>

                                @component('vendor.larapanel.components.table')
                                    @slot('thead')
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام</th>
                                            <th>برچسب</th>
                                            <th># دسترسی‌ها</th>
                                            <th>فعالیت</th>
                                        </tr>
                                    @endslot
                                    @slot('tbody')
                                        @forelse ($roles as $role)
                                            <tr>
                                                <td>
                                                    {{$role->id}}
                                                </td>
                                                <td>
                                                    {{$role->name}}
                                                </td>
                                                <td>
                                                    {{$role->display_name}}
                                                </td>
                                                <td>
                                                    {{$role->permissions_count}}
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{route('roles.edit', $role->id)}}"
                                                       class="btn btn-sm btn-primary">ویرایش</a>
                                                    <a  href="#"
                                                        class="btn btn-sm btn-danger mr-2 destroy_ajax" data-id="{{$role->id}}">
                                                        حذف
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">موردی برای نمایش وجود ندارد.</td>
                                            </tr>
                                        @endforelse
                                    @endslot

                                @endcomponent

                                {{--Paginate section--}}
                                {{ $roles->withQueryString()->links() }}
                            @endslot
                        @endcomponent
                    @endslot
                @endcomponent
            </div>
        </div>


    @endslot

    @slot('script')
        <script>
            $(".destroy_ajax").on('click', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                Swal.fire({
                    title: 'آیا برای حذف اطمینان دارید؟',
                    icon: 'warning',
                    showCancelButton: true,
                    customClass: {
                        confirmButton: 'btn btn-danger mx-2',
                        cancelButton: 'btn btn-light mx-2'
                    },
                    buttonsStyling: false,
                    confirmButtonText: 'حذف',
                    cancelButtonText: 'لغو'
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "delete",
                                url: baseUrl + '/panel/roles/' + id,
                                dataType: 'json',
                                success: function (response) {
                                    Swal.fire({
                                        icon: 'success',
                                        text: 'عملیات حذف با موفقیت انجام شد.',
                                        confirmButtonText:'تایید',
                                        customClass: {
                                            confirmButton: 'btn btn-success',
                                        },
                                        buttonsStyling: false
                                    })
                                        .then((response) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });
        </script>
    @endslot

@endcomponent
