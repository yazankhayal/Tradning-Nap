<nav class="main-header navbar navbar-expand navbar-light {{sidebar_color() != null ? sidebar_color() : " navbar-white"}}">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item btn_menu_click">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('index')}}" class="nav-link">{{lang_name('Home_Page')}}</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route('contact')}}" class="nav-link">{{lang_name('Contact')}}</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
