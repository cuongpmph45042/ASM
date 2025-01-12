<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class>
            <a href="{{ url('admin') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/categories') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/9.svg') }}" alt>
                </div>
                <span>Danh mục</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/posts') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/4.svg') }}" alt>
                </div>
                <span>Bài viết</span>
            </a>
        </li>
        <li class>
            <a href="{{ url('admin/users') }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/11.svg') }}" alt>
                </div>
                <span>Người dùng</span>
            </a>
        </li>
        <li class>
            <a href="{{ url() }}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Trang client</span>
            </a>
        </li>
    </ul>
</nav>
