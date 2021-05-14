@component('vendor.larapanel.panel.layouts.component', ['title' => $model ? ( ($type == 'permission') ? 'دسترسی‌ها، ویرایش' : 'نقش‌ها، ویرایش') : ( ($type == 'permission') ? 'دسترسی‌ها، ایجاد' : 'نقش‌ها، ایجاد')])

    @slot('style')
    @endslot

    @slot('subject')
        <h1>
            <i class="fa fa-users"></i> {{ $model ? ( ($type == 'permission') ? 'دسترسی‌ها، ویرایش' : 'نقش‌ها، ویرایش') : ( ($type == 'permission') ? 'دسترسی‌ها، ایجاد' : 'نقش‌ها، ایجاد') }}
        </h1>
        <p>این بخش
            برای {{ $model ? ( ($type == 'permission') ? 'ویرایش دسترسی‌ها' : 'ویرایش نقش‌ها') : ( ($type == 'permission') ? 'ایجاد دسترسی‌ها' : 'ایجاد نقش‌ها') }}
            می‌باشد.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('roles-assignment.index') }}">سطوح دسترسی</a></li>
        <li class="breadcrumb-item">{{ ($type == 'permission') ? 'دسترسی‌ها' : 'نقش‌ها'}}</li>
    @endslot

    @slot('content')
        <div class="row">
            <div class="col-md-12">
                @component('vendor.larapanel.components.accordion')
                    @slot('cards')
                        @component('vendor.larapanel.components.collapse-card', ['id' => 'permission_role_edit', 'show' => 'show', 'title' => ''])
                            @slot('body')
                                <form method="POST"
                                      action="{{$model ? route("{$type}s.update", $model->id) : route("{$type}s.store")}}">
                                    @csrf
                                    @if ($model)
                                        @method('PUT')
                                    @endif
                                    <div class="form-group">
                                        <span class="text-danger">*</span>
                                        <label for="name"><strong>نام</strong></label>
                                        <input
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name"
                                            id="name"
                                            placeholder="نام"
                                            value="{{ $model->name ?? old('name') }}"
                                            @if ($model)
                                            readonly
                                            @endif
                                            autocomplete="off"
                                        >
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="display_name"><strong>برچسب</strong></label>
                                        <input
                                            class="form-control"
                                            name="display_name"
                                            id="display_name"
                                            placeholder="برچسب"
                                            value="{{ $model->display_name ?? old('display_name') }}"
                                            autocomplete="off"
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label for="description"><strong>توضیحات</strong></label>
                                        <textarea
                                            class="form-control"
                                            rows="3"
                                            name="description"
                                            id="description"
                                            placeholder="{{ ($type == 'permission') ? 'توصیحات برای دسترسی' : 'توضیحات برای نقش' }}"
                                        >{{ $model->description ?? old('description') }}</textarea>
                                    </div>

                                    @if($type == 'role')
                                        <p class="mb-2"><strong>دسترسی‌ها</strong></p>
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
                                    @endif
                                    <div class="py-3">
                                        <button class="btn btn-success" type="submit">ثبت</button>
                                        <a
                                            href="{{route("{$type}s.index")}}"
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
