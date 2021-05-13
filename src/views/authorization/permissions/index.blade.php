@component('larapanel::panel.layouts.component', ['title' => 'دسترسی‌ها'])

    @slot('style')
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> دسترسی‌ها </h1>
        <p>لیست دسترسی‌های تعریف شده برای مدیریت سطوح دسترسی.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('roles-assignment.index') }}">سطوح دسترسی</a></li>
        <li class="breadcrumb-item">دسترسی‌ها</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('larapanel::components.accordion')
                    @slot('cards')
                        @component('larapanel::components.collapse-card', ['id' => 'permission_index', 'show' => 'show', 'title' => 'لیست دسترسی‌ها'])
                            @slot('body')
                                @component('larapanel::components.collapse-search')
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
                                    <a href={{ route('permissions.create') }} type="button" class="btn btn-primary"><i class="fa fa-plus"></i> ایجاد دسترسی</a>
                                </div>

                                @component('larapanel::components.table')
                                    @slot('thead')
                                        <tr>
                                            <th>شناسه</th>
                                            <th>نام</th>
                                            <th>برچسب</th>
                                            <th>توضیحات</th>
                                            <th>فعالیت</th>
                                        </tr>
                                    @endslot
                                    @slot('tbody')
                                        @forelse ($permissions as $permission)
                                            <tr>
                                                <td>
                                                    {{$permission->id}}
                                                </td>
                                                <td>
                                                    {{$permission->name}}
                                                </td>
                                                <td>
                                                    {{$permission->display_name}}
                                                </td>
                                                <td>
                                                    {{$permission->description}}
                                                </td>
                                                <td class="d-flex">
                                                    <a href="{{route('permissions.edit', $permission->id)}}"
                                                       class="btn btn-sm btn-primary mr-2">ویرایش</a>
                                                    <a  href="#"
                                                        class="btn btn-sm btn-danger destroy_ajax" data-id="{{$permission->id}}">
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
                                {{ $permissions->withQueryString()->links() }}
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
                    cancelButtonText: 'لغو',
                    showClass: {
                        popup: 'animated fadeInDown'
                    },
                    hideClass: {
                        popup: 'animated fadeOutUp'
                    }
                })
                    .then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                type: "delete",
                                url: baseUrl + '/panel/permissions/' + id,
                                dataType: 'json',
                                success: function (response) {
                                    Swal.fire({
                                        icon: 'success',
                                        text: 'عملیات حذف با موفقیت انجام شد.',
                                        confirmButtonText:'تایید',
                                        customClass: {
                                            confirmButton: 'btn btn-success',
                                        },
                                        buttonsStyling: false,
                                        showClass: {
                                            popup: 'animated fadeInDown'
                                        },
                                        hideClass: {
                                            popup: 'animated fadeOutUp'
                                        }
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
