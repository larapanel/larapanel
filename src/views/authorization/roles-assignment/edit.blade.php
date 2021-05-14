@component('vendor.larapanel.panel.layouts.component', ['title' => "سطوح دسترسی، ویرایش"])

    @slot('style')
    @endslot

    @slot('subject')
        <h1><i class="fa fa-users"></i> سطوح دسترسی، ویرایش </h1>
        <p>از این بخش می‌توانید سطوح دسترسی کاربران را مدیریت نمایید.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item">سطوح دسترسی</li>
    @endslot

    @slot('content')
        <div class="row py-3">
            <div class="col-md-12">
                @component('vendor.larapanel.components.accordion')
                    @slot('cards')
                        @component('vendor.larapanel.components.collapse-card', ['id' => 'role_assignment_edit', 'show' => 'show', 'title' => ''])
                            @slot('body')
                                <form
                                    method="POST"
                                    action="{{route('roles-assignment.update', ['roles_assignment' => $user->id, 'model' => $modelKey])}}"
                                >
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="name"><strong>نام کاربر</strong></label>
                                        <input
                                            class="form-control"
                                            name="name"
                                            id="name"
                                            placeholder="نام کاربر"
                                            value="{{$user->full_name ?? 'The model doesn\'t have a `name` attribute'}}"
                                            readonly
                                            autocomplete="off"
                                        >
                                    </div>
                                    <br>
                                    <p class="mb-2"><strong>نقش‌ها</strong></p>
                                    <div class="mb-4">
                                        <div class="row">
                                            @foreach ($roles as $role)
                                                <div class="col-md-3 mb-2">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               name="roles[]"
                                                               value="{{$role->id}}"
                                                               {!! $role->assigned ? 'checked' : '' !!}
                                                               class="custom-control-input"
                                                               id="{{ 'role'.$role->id  }}">
                                                        <label class="custom-control-label" for="{{ 'role'.$role->id  }}">{{$role->name}}</label>
                                                        {{--                                                <div class="invalid-feedback">Example invalid feedback text</div>--}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @if ($permissions)
                                        <p class="mb-2"><strong>دسترسی‌ها</strong></p>
                                        <div class="mb-4">
                                            <div class="row">
                                                @foreach ($permissions as $permission)
                                                    <div class="col-md-3 mb-2">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox"
                                                                   name="permissions[]"
                                                                   value="{{$permission->id}}"
                                                                   {!! $permission->assigned ? 'checked' : '' !!}
                                                                   class="custom-control-input"
                                                                   id="{{ 'permission'.$permission->id  }}">
                                                            <label class="custom-control-label" for="{{ 'permission'.$permission->id  }}">{{$permission->name}}</label>
                                                            {{--                                                    <div class="invalid-feedback">Example invalid feedback text</div>--}}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                    <div>
                                        <button class="btn btn-success" type="submit">ثبت</button>
                                        <a
                                            href="{{route("roles-assignment.index", ['model' => $modelKey])}}"
                                            class="btn btn-danger"
                                        >
                                            انصراف
                                        </a>
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
    @endslot

@endcomponent
