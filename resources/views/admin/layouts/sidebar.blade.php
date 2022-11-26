<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item nav-category">Quản lý view</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-blogger"></i>
                <span class="menu-title">Bài viết</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.blog.index')}}">Danh sách bài viết</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('admin.blog.create')}}">Tạo bài viết</a></li>--}}
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements1" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Danh mục</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.category.index')}}">Danh sách danh mục</a></li>
{{--                    <li class="nav-item"><a class="nav-link" href="{{route('admin.category.create')}}">Tạo danh mục</a></li>--}}
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements2" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-account"></i>
                <span class="menu-title">Tài khoản</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.user.index')}}">Danh sách tài khoản</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.permission.index')}}">Danh sách quyền</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.role.index')}}">Danh sách vai trò</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements3" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-email"></i>
                <span class="menu-title">Khách hàng liên hệ</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements3">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.customer.index')}}">DS khách hàng</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements4" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Cấu hình view</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements4">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.configuration.index')}}">DS cấu hình</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements5" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Slide</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements5">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{route('admin.slide.index')}}">DS slide</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
