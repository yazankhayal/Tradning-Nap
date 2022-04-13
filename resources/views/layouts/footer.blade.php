<footer id="site-footer" class="site-footer bg-footer" style="background-image: url('{{setting()->footer()}}')">
    <div class="main-footer">
        <div class="container-custom">
            <div class="row">

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="media_image-1" class="widget widget_media_image">
                            <a href="{{route('index')}}"><img style="height: 88px;width: 100%;" src="{{setting()->avatar1()}}"
                                                              alt="{{setting()->name()}}"></a>
                        </div>
                        <div id="custom_html-1" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <p>{{setting()->summary()}}</p>
                                <p>{{setting()->name()}} © {{date('Y')}} {{lang_name('Copy_Right')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="custom_html-2" class="widget_text widget widget_custom_html padding-left">
                            <div class="textwidget custom-html-widget">
                                <ul>
                                    @if(category()->count() != 0)
                                        @foreach(category() as $r)
                                            <li class="menu-item"><a href="{{$r->route()}}">{{$r->name()}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="custom_html-3"
                             class="widget_text widge widget-footer widget_custom_html padding-left">
                            <div class="textwidget custom-html-widget">
                                <ul>
                                    <li class="">
                                        <a href="{{route('index')}}">{{lang_name('Home_Page')}}</a>
                                    </li>
                                    <li class=" ">
                                        <a href="{{route('about')}}">{{lang_name('About')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('blog')}}">{{lang_name('Blog')}}</a>
                                    </li>
                                    <li class="">
                                        <a href="{{route('contact')}}">{{lang_name('Contact')}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

                <div class="col-md-3 col-sm-6">
                    <div class="widget-footer">
                        <div id="mc4wp_form_widget-1" class="widget widget_mc4wp_form_widget">

                            <form method="post" action="{{route('newsletter')}}"
                                  class="mc4wp-form mc4wp-form-1696 ajaxForm newsletter"
                                  data-name="newsletter">
                                {{csrf_field()}}

                                <div class="input-group">

                                    <input type="email" name="email" id="email" class="cls form-control"
                                           placeholder="{{lang_name('Email')}}">
                                    <span class="input-group-btn">
	                                        	<button type="submit" class="btn btn-subcribe"><i
                                                        class="icon ion-md-checkmark"></i></button>
	                                        </span>
                                </div>

                            </form>

                        </div>
                        <!-- / Mailchimp for WordPress Plugin -->

                        <div class="footer-social ot-socials bg-white">
                            {{lang_name('follow_us')}}:
                            @if(hp_contact()->facebook)
                                <a target="_blank" href="{{hp_contact()->facebook}}" rel="noopener noreferrer"><i
                                        class="icon ion-logo-facebook"></i></a>
                            @endif
                            @if(hp_contact()->instagram)
                                <a target="_blank" href="{{hp_contact()->instagram}}" rel="noopener noreferrer"><i
                                        class="icon ion-logo-instagram"></i></a>
                            @endif
                            @if(hp_contact()->twitter)
                                <a target="_blank" href="{{hp_contact()->twitter}}" rel="noopener noreferrer"><i
                                        class="icon ion-logo-twitter"></i></a>
                            @endif
                            @if(hp_contact()->pinterest)
                                <a target="_blank" href="{{hp_contact()->pinterest}}" rel="noopener noreferrer"><i
                                        class="icon ion-logo-youtube"></i></a>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- end col-lg-3 -->

            </div>
        </div>
    </div>
    <!-- .main-footer -->
    <div class="footer-bottom">
        <div class="container-custom">
            <div class="row">
                <div class="col-md-12">
                    <ul class="topbar-left">
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->address}}</li>
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->phone}}</li>
                        <li><i class="icon ion-md-pin"></i>{{hp_contact()->email}}</li>
                    </ul>
                    <a id="back-to-top" href="#" class="btn btn-back-to-top pull-right">{{lang_name('Back_to_top')}}
                        <i
                            class="icon ion-ios-arrow-dropup-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- .copyright-footer -->
</footer>
