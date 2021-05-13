@component('home.layouts.component', ['title' => 'صفحه اصلی'])

    @slot('style')
    @endslot

    @slot('content_top')
    @endslot

    @slot('content')
        <!-- Hero Section-->
        <section style="background: url({{ asset('images/home/default/itafza-home-back-min.jpeg') }}); background-size: cover; background-position: center center" class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <h1>قالب جدید وبسایت</h1><a href="#" class="hero-link">اطلاعات بیشتر</a>
                    </div>
                </div><a href=".intro" class="continue link-scroll"><i class="fa fa-long-arrow-down"></i> اسکرول به پایین</a>
            </div>
        </section>

        <!-- Intro Section-->
        <section class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2 class="h3">یک محتوی جالب در اینجاست</h2>
                        <p class="text-big">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="featured-posts no-padding-top">
            <div class="container">
                <!-- Post-->
                <div class="row d-flex align-items-stretch">
                    <div class="text col-lg-7">
                        <div class="text-inner d-flex align-items-center">
                            <div class="content">
                                <header class="post-header">
                                    <div class="category">لورم ایپسوم متن ساختگی</div><a href="post.html">
                                        <h2 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</h2></a>
                                </header>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('images/home/default/avatar-1.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>علی مرادی</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 ماه قبل</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="image col-lg-5"><img src="{{ asset('images/home/default/featured-pic-1.jpeg') }}" alt="..."></div>
                </div>
                <!-- Post        -->
                <div class="row d-flex align-items-stretch">
                    <div class="image col-lg-5"><img src="{{ asset('images/home/default/featured-pic-2.jpeg') }}" alt="..."></div>
                    <div class="text col-lg-7">
                        <div class="text-inner d-flex align-items-center">
                            <div class="content">
                                <header class="post-header">
                                    <div class="category"><a href="#">لورم ایپسوم متن ساختگی</a></div><a href="post.html">
                                        <h2 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</h2></a>
                                </header>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('images/home/default/avatar-2.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>علی مرادی</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 ماه قبل</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post                            -->
                <div class="row d-flex align-items-stretch">
                    <div class="text col-lg-7">
                        <div class="text-inner d-flex align-items-center">
                            <div class="content">
                                <header class="post-header">
                                    <div class="category"><a href="#">لورم ایپسوم متن ساختگی</a></div><a href="post.html">
                                        <h2 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</h2></a>
                                </header>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                                <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                                        <div class="avatar"><img src="{{ asset('images/home/default/avatar-3.jpg') }}" alt="..." class="img-fluid"></div>
                                        <div class="title"><span>علی مرادی</span></div></a>
                                    <div class="date"><i class="icon-clock"></i> 2 ماه قبل</div>
                                    <div class="comments"><i class="icon-comment"></i>12</div>
                                </footer>
                            </div>
                        </div>
                    </div>
                    <div class="image col-lg-5"><img src="{{ asset('images/home/default/featured-pic-3.jpeg') }}" alt="..."></div>
                </div>
            </div>
        </section>

        <!-- Divider Section-->
        <section style="background: url({{ asset('images/home/default/divider-bg.jpg') }}); background-size: cover; background-position: center bottom" class="divider">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2>برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</h2><a href="#" class="hero-link">اطلاعات بیشتر</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest Posts -->
        <section class="latest-posts">
            <div class="container">
                <header>
                    <h2>جدیدترین مطالب وبلاگ</h2>
                    <p class="text-big">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ.</p>
                </header>
                <div class="row">
                    <div class="post col-md-4">
                        <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('images/home/default/blog-1.jpg') }}" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date">5 اردیبهشت | 1400</div>
                                <div class="category"><a href="#">لورم ایپسوم</a></div>
                            </div><a href="post.html">
                                <h3 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی</h3></a>
                            <p class="text-muted">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </div>
                    </div>
                    <div class="post col-md-4">
                        <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('images/home/default/blog-2.jpg') }}" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date">6 اردیبهشت | 1400</div>
                                <div class="category"><a href="#">لورم ایپسوم</a></div>
                            </div><a href="post.html">
                                <h3 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی</h3></a>
                            <p class="text-muted">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </div>
                    </div>
                    <div class="post col-md-4">
                        <div class="post-thumbnail"><a href="post.html"><img src="{{ asset('images/home/default/blog-3.jpg') }}" alt="..." class="img-fluid"></a></div>
                        <div class="post-details">
                            <div class="post-meta d-flex justify-content-between">
                                <div class="date">6 اردیبهشت | 1400</div>
                                <div class="category"><a href="#">لورم ایپسوم</a></div>
                            </div><a href="post.html">
                                <h3 class="h4">لورم ایپسوم متن ساختگی با تولید سادگی</h3></a>
                            <p class="text-muted">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section-->
        <section class="newsletter no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>عضویت در خبرنامه</h2>
                        <p class="text-big">برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="col-md-8">
                        <div class="form-holder">
                            <form action="#">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" placeholder="ایمیل خود را وارد کنید">
                                    <button type="submit" class="submit">عضویت</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section-->
        <section class="gallery no-padding">
            <div class="row">
                <div class="mix col-lg-3 col-md-3 col-sm-6">
                    <div class="item"><a href="{{ asset('images/home/default/gallery-1.jpg') }}" data-fancybox="gallery" class="image"><img src="{{ asset('images/home/default/gallery-1.jpg') }}" alt="..." class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
                </div>
                <div class="mix col-lg-3 col-md-3 col-sm-6">
                    <div class="item"><a href="{{ asset('images/home/default/gallery-2.jpg') }}" data-fancybox="gallery" class="image"><img src="{{ asset('images/home/default/gallery-2.jpg') }}" alt="..." class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
                </div>
                <div class="mix col-lg-3 col-md-3 col-sm-6">
                    <div class="item"><a href="{{ asset('images/home/default/gallery-3.jpg') }}" data-fancybox="gallery" class="image"><img src="{{ asset('images/home/default/gallery-3.jpg') }}" alt="..." class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
                </div>
                <div class="mix col-lg-3 col-md-3 col-sm-6">
                    <div class="item"><a href="{{ asset('images/home/default/gallery-4.jpg') }}" data-fancybox="gallery" class="image"><img src="{{ asset('images/home/default/gallery-4.jpg') }}" alt="..." class="img-fluid">
                            <div class="overlay d-flex align-items-center justify-content-center"><i class="icon-search"></i></div></a></div>
                </div>
            </div>
        </section>


    @endslot

    @slot('script')
    @endslot

@endcomponent
