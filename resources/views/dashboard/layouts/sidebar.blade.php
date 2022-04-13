<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
        <img src="{{setting()->avatar()}}" alt="{{setting()->name()}}" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{setting()->name()}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{path().$user->avatar}}" class="img-circle elevation-2" alt="{{$user->name}}">
            </div>
            <div class="info">
                <a href="{{route('index')}}" class="d-block">{{$user->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            {{$lang->Dashboard}}
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_admin.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Dashboard}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_contact_us.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Contact_us}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_newsletter.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Newsletter}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            {{$lang->Edit_Home_page}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_slider.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Slider}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_gallery.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->gallery}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_fact.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->fact}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_address.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->why}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_special.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->special}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            {{$lang->About_Page}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_about.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->About}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_testimonials.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Testimonials}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            {{$lang->Blog}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_posts.add_edit')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Create}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_posts.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Blog}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-server"></i>
                        <p>
                            {{$lang->Services}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_products.add_edit')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Create}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_products.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Services}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            {{$lang->email_setting}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_email_setting.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->email_setting}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_send_email.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Send_Email}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            {{$lang->Setting}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('dashboard_setting.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Setting}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_hp_contact_us.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Contact_us}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_scripts.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Scripts}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_language.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Language}}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard_users.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>{{$lang->Users}}</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">{{$lang->LABELS}}</li>
                <li class="nav-item">
                    <a href="{{route('index')}}" target="_blank" class="nav-link">
                        <i class="nav-icon far fa-circle text-primary"></i>
                        <p class="text">{{setting()->name()}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('contact')}}" target="_blank" class="nav-link">
                        <i class="nav-icon far fa-circle text-primary"></i>
                        <p class="text">{{lang_name('Contact')}}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('log_out')}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">{{$lang->LogOff}}</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
