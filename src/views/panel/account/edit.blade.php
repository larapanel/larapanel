@component('vendor.larapanel.panel.layouts.component', ['title' => 'حساب‌کاربری'])

    @slot('style')
         <style>
             label.cabinet{
                 display: block;
                 cursor: pointer;
             }

             label.cabinet input.file{
                 position: relative;
                 height: 100%;
                 width: auto;
                 opacity: 0;
                 -moz-opacity: 0;
                 filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
                 margin-top:-30px;
             }

             #upload-demo{
                 width: 250px;
                 height: 250px;
                 padding-bottom:25px;
             }
             figure figcaption {
                 position: absolute;
                 bottom: 0;
                 color: #fff;
                 width: 100%;
                 padding-left: 9px;
                 padding-bottom: 5px;
                 text-shadow: 0 0 10px #000;
             }
         </style>
    @endslot

    @slot('subject')
        <h1><i class="fa fa-user"></i> حساب‌کاربری</h1>
        <p>بخش ویرایش اطلاعات حساب‌کاربری، لطفا اطلاعات خود را با دقت وارد نمایید.</p>
    @endslot

    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{ route('panel') }}"> پنل مدیریت</a></li>
        <li class="breadcrumb-item">حساب‌کاربری</li>
    @endslot

    @slot('content')
        <div class="row user">
            <div class="col-md-12">
                <div class="profile">
                    <div style="padding: 30px 60px;text-align: center;white-space: nowrap;background-color: #404040;color: #fff;">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <label class="cabinet center-block">
                                        <input type="file" class="item-img file center-block" name="file_photo" style="opacity: 1;display: none;"/>
                                        <figure>
                                            <img src="{{ $imageUrl ?? asset('images/home/profile.png') }}" class="gambar img-responsive img-thumbnail" id="item-img-output" style="height: 150px; width: 150px;border-radius: 50%;" />
                                        </figure>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title" id="myModalLabel"></h4>
                                    </div>
                                    <div class="modal-body" style="text-align: -webkit-center;">
                                        <div id="upload-demo" class="center-block"></div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="cropImageBtn" class="btn btn-primary">برش</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>{{ auth()->user()->full_name }}</h4>
                        @forelse(auth()->user()->roles as $role)
                            <span class="py-0">{{ $role->display_name }}</span><br>
                        @empty
                            <span></span>
                        @endforelse
                    </div>

                    <div style="flex: 1;background-image: url({{asset('images/home/nature.png')}});background-size: cover;background-position: center;min-height: 300px;"></div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="tile p-0">
                    <ul class="nav flex-column nav-tabs user-tabs">
                        <li class="nav-item"><a class="nav-link active" href="#user-settings" data-toggle="tab">تنظیمات</a></li>
                        <li class="nav-item"><a class="nav-link" href="#user-timeline" data-toggle="tab">آخرین رویداد‌ها</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane active" id="user-settings">
                        <div class="tile user-settings">
                            <h4 class="line-head">اطلاعات کاربری</h4>
                            <form action="{{ route('account.update', $account) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <label for="username">نام کاربری</label>
                                        <input class="form-control @error('username') is-invalid @enderror" type="text" name="username" id="username" value="{{ $account->username ?? old('username') }}">
                                        @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="first_name"></label>
                                        <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name" value="{{ $account->first_name ?? old('first_name') }}">
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="last_name"></label>
                                        <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name" value="{{ $account->last_name ?? old('last_name') }}">
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="mobile">تلفن‌همراه</label>
                                        <input class="form-control @error('mobile') is-invalid @enderror" type="text" name="mobile" id="mobile" value="{{ $account->mobile ?? old('mobile') }}">
                                        @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email">ایمیل</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ $account->email ?? old('email') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-8">
                                        <label for="two_factor_status">فعال‌سازی ورود دو مرحله‌ای</label>
                                        <select class="form-control select2 @error('two_factor_status') is-invalid @enderror" name="two_factor_status" id="two_factor_status">
                                            <option value="off" {{ ($account->two_factor_status == 'off') ? 'selected' : '' }}>غیر‌فعال باشد</option>
                                            <option value="sms" {{ ($account->two_factor_status == 'sms') ? 'selected' : '' }}>از طریق پیامک</option>
                                            <option value="email" {{ ($account->two_factor_status == 'email') ? 'selected' : '' }}>از طریق ایمیل</option>
                                        </select>
                                        @error('two_factor_status')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>
                                                    {{ $message }}
                                                </strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-success" type="submit">ثبت</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="user-timeline">
                        <div class="timeline-post">
                            <div class="post-media"><a href="#">-</a>
                                <div class="content">
                                    <h5><a href="#">John Doe</a></h5>
                                    <p class="text-muted"><small>2 January at 9:30</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                                <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                            </ul>
                        </div>
                        <div class="timeline-post">
                            <div class="post-media"><a href="#">-</a>
                                <div class="content">
                                    <h5><a href="#">John Doe</a></h5>
                                    <p class="text-muted"><small>2 January at 9:30</small></p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,	quis tion ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <ul class="post-utility">
                                <li class="likes"><a href="#"><i class="fa fa-fw fa-lg fa-thumbs-o-up"></i>Like</a></li>
                                <li class="shares"><a href="#"><i class="fa fa-fw fa-lg fa-share"></i>Share</a></li>
                                <li class="comments"><i class="fa fa-fw fa-lg fa-comment-o"></i> 5 Comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endslot

    @slot('script')
        <script>
            $(".select2").select2({
                theme: "bootstrap"
            });

            // Start upload preview image
            var $uploadCrop,
                tempFilename,
                rawImg,
                imageId;
            function readFile(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.upload-demo').addClass('ready');
                        $('#cropImagePop').modal('show');
                        rawImg = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
                else {
                    swal("Sorry - you're browser doesn't support the FileReader API");
                }
            }

            $uploadCrop = $('#upload-demo').croppie({
                viewport: {
                    width: 150,
                    height: 150,
                    type: 'square' // 'square', 'circle'
                },
                enforceBoundary: false,
                enableExif: true
            });
            $('#cropImagePop').on('shown.bs.modal', function(){
                // alert('Shown pop');
                $uploadCrop.croppie('bind', {
                    url: rawImg
                }).then(function(){
                    console.log('jQuery bind complete');
                });
            });

            $('.item-img').on('change', function () { imageId = $(this).data('id'); tempFilename = $(this).val();
            $('#cancelCropBtn').data('id', imageId); readFile(this); });
            $('#cropImageBtn').on('click', function (ev) {
                $uploadCrop.croppie('result', {
                    type: 'base64',
                    format: 'jpeg',
                    size: {width: 150, height: 150}
                }).then(function (resp) {
                    $('#item-img-output').attr('src', resp);
                    $('#cropImagePop').modal('hide');
                    setImage(resp);
                });
            });

            function setImage(base64image) {
                let url = '{{ route('account.setImage') }}';
                axios.post(url, {image: base64image})
                    .then(response => {
                        if(response.data.status === 200) {
                            alertify.success(response.data.message);
                        } else {
                            alertify.error(response.data.message);
                        }
                    });
            }
            function getImage() {
                let url = '{{ route('account.getImage') }}';
                axios.get(url)
                    .then(response => {
                        $(".gambar").attr("src", response.data.image);
                        $(".sidebar_user_image").attr("src", response.data.image);
                    });
            }
            // End upload preview image
        </script>
    @endslot

@endcomponent

