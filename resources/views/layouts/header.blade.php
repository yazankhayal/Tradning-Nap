<div class="collapse searchbar" id="searchbar">
    <div class="search-area">
        <div class="container">
           <form method="get" action="{{route('services')}}">
               <div class="row">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                       <div class="input-group">
                           <input type="text" class="form-control" name="q" placeholder="{{lang_name('Search_now')}}">
                           <span class="input-group-btn">
	            					<button class="btn btn-primary" type="submit">{{lang_name('Go')}}</button>
	            				</span>
                       </div>
                       <!-- /input-group -->
                   </div>
                   <!-- /.col-lg-6 -->
               </div>
           </form>
        </div>
    </div>
</div>
<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-8">
                    <!-- Info on Topbar -->
                    <ul class="topbar-left">
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->address}}</li>
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->phone}}</li>
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->email}}</li>
                    </ul>
                </div>
                <!-- Info on topbar close -->
                <div class="col-md-4">
                    <ul class="topbar-right pull-right">
                        <li class="toggle_search topbar-search">
                            <a href="#"><i class="icon ion-md-search"></i></a>
                        </li>

                        @if($langauges->count() > 1)
                            @foreach($langauges as $lang222)
                                <li class="topbar-login">
                                    <a href="{{route('change_language',['lang'=>$lang222->dir])}}">
                                        <img style="width: 16px;height: 16px;" src="{{path().$lang222->avatar}}">
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar close -->
    <div class="main-header md-hidden sm-hidden">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-3">
                    <div class="logo-brand" style="margin-top: 14px;">
                        <a href="{{route('index')}}"><img  style="height: 88px;width: 100%;" src="{{setting()->avatar()}}" alt="{{setting()->name()}}"></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-navigation">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item current-menu-ancestor current-menu-parent">
                                <a href="{{route('index')}}">{{lang_name('Home_Page')}}</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('about')}}">{{lang_name('About')}}</a>
                            </li>
                            <li class="menu-item menu-item-has-children"><a
                                    href="{{route('services')}}">{{lang_name('Services')}}</a>
                                <ul class="sub-menu">
                                    @if(category()->count() != 0)
                                        @foreach(category() as $r)
                                            <li class="menu-item"><a href="{{$r->route()}}">{{$r->name()}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('blog')}}">{{lang_name('Blog')}}</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('contact')}}">{{lang_name('Contact')}}</a>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn btn-primary">{{lang_name('Get_a_quote')}}<i
                                class="icon ion-md-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main header start -->

    <!-- Mobile header start -->
    <div class="mobile-header">
        <div class="container-custom">
            <div class="row">
                <div class="col-xs-6">
                    <div class="logo-brand-mobile">
                        <a href="{{route('index')}}"><img src="{{setting()->avatar()}}" alt="{{setting()->name()}}"></a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div id="mmenu_toggle">
                        <button></button>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="mobile-nav">
                        <ul id="primary-menu-mobile" class="mobile-menu">
                            <li class="menu-item current-menu-ancestor current-menu-parent">
                                <a href="{{route('index')}}">{{lang_name('Home_Page')}}</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('about')}}">{{lang_name('About')}}</a>
                            </li>
                            <li class="menu-item menu-item-has-children"><a
                                    href="{{route('services')}}">{{lang_name('Services')}}</a>
                                <ul class="sub-menu">
                                    @if(category()->count() != 0)
                                        @foreach(category() as $r)
                                            <li class="menu-item">
                                                <a href="{{$r->route()}}">
                                                    {{$r->name()}}
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('blog')}}">{{lang_name('Blog')}}</a>
                            </li>
                            <li class="menu-item ">
                                <a href="{{route('contact')}}">{{lang_name('Contact')}}</a>
                            </li>
                        </ul>
                        <a href="{{route('contact')}}" class="btn btn-primary">{{lang_name('Get_a_quote')}}<i
                                class="icon ion-md-paper-plane"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile header start -->
