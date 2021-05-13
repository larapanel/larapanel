<header class="header">
    <!-- Main Navbar-->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <form action="#">
                            <div class="form-group">
                                <input type="search" name="search" id="search" placeholder="جستجو در سایت">
                                <button type="submit" class="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
                <!-- Navbar Brand --><a href="{{ url('/') }}" class="navbar-brand">آی‌تی افزا</a>
                <!-- Toggle Button-->
                <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link active ">خانه</a>
                    </li>
                    <li class="nav-item"><a href="blog.html" class="nav-link ">وبلاگ</a>
                    </li>
                    <li class="nav-item"><a href="post.html" class="nav-link ">فروشگاه</a>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link ">تماس باما</a>
                    </li>
                </ul>
                <div class="navbar-text">
                    <a href="#" class="search-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </a>
                </div>
                <ul class="langs navbar-text">
                    <a href="#" class="active">ورود</a>
                    <a href="#">ثبت نام</a>
                </ul>
            </div>
        </div>
    </nav>
</header>
