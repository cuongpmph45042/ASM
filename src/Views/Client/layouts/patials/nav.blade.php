<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="{{url()}}">
                <img class="img-fluid" width="100px" src="{{ asset('assets/client/images/logo.png') }}"
                    alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url() }}">Trang chủ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('posts/list') }}">Bài viết</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            About <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">

                            <a class="dropdown-item" href="about-me.html">About Me</a>

                            <a class="dropdown-item" href="about-us.html">About Us</a>

                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên hệ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shop</a>
                    </li>
                    @if (isset($_SESSION['user']) && $_SESSION['user']['type'] == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('admin') }}">Vào trang quản trị</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                @if (!isset($_SESSION['user']))
                    <a href="{{url('auth/login')}}" class="btn-sm btn-light mr-3">Login</a>     
                @else
                <a onclick="return confirm('Xác nhận đăng xuất!')" href="{{url('auth/logout')}}" class="btn-sm btn-light mr-3">Logout</a>
                @endif

                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse"
                    data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
            </div>

        </nav>
    </div>
</header>