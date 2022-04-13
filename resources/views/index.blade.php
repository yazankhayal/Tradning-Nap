@extends('layouts.app')

@section('title')
    {{$lang->Home_Page}}
@endsection

@section('content')

    <div class="slider" data-show="1" data-arrow="true">

        @if($slider->count() != 0)
            @foreach($slider as $i)
                <div>
                    <div class="slider-item">
                        <img src="{{$i->img1()}}" alt="{{$i->name()}}"/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="slider-content">
                                        <h4> {{$i->name()}}</h4>
                                        <h1>{!! $i->summary() !!}</h1>
                                        @if($i->link)
                                            <a class="btn btn-primary"
                                               href="{{$i->link}}">{{lang_name('Read_More')}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

    </div>

    <section class="no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-primary">{{lang_name('OUR_SERVICES')}}</h4>
                    <h2>{{lang_name('What_we_do')}}</h2>
                    <div class="industris-space-30"></div>

                    <div class="services-block-left">
                        <div class="services-slider-img-left">
                            <img src="{{path()}}files/home/images/services-solution.png" alt="">
                        </div>
                    </div>

                    <div class="services-slider" data-show="3" data-arrow="true">

                        @if($address->count() != 0)
                            @foreach($address as $i)
                                <div class="services-item">
                                    <div class="services-box">
                                        <div class="services-icon">
                                            <img style="height: 80px;" src="{{$i->img1()}}" alt="{{$i->name()}}"/>
                                        </div>
                                        <div class="services-content">
                                            <h3> {{$i->name()}}</h3>
                                            <p>{!! $i->summary() !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>

                </div>
            </div>
        </div>
        <div class="industris-space-90"></div>
    </section>

    <section class="bg-primary no-padding">
        <div class="">
            <div class="flex-row">
                <div class="video-section-left" style="background-image:url('{{$about->img1()}}');">
                    <div class="home-video video-player">
                        <a class="video-play" href="{{$about->link}}"><i
                                class="icon ion-md-play"></i></a>
                    </div>
                </div>
                <div class="video-section-right">
                    <div class="block-right">
                        {!! $about->summary() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                        @if($gallery->count() != 0)
                            @foreach($gallery as $i)
                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img style="height: 120px;" src="{{$i->img()}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="industris-space"></div>
            <hr>
            <div class="industris-space"></div>
        </div>

        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6 align-self-center">
                    {!! $special->summary() !!}
                </div>
                <div class="col-md-6">
                    <img src="{{$special->img1()}}" alt="home image">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="industris-space"></div>
            <hr>
            <div class="industris-space"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>{{lang_name('Get_a_quote')}}</h3>
                    <p>{{lang_name('As_fellow_entrepreneurs_we_understand_the_need_for_space_which_gives_your_business_room_to_breathe_and_grow')}}</p>
                </div>
            </div>
            <div class="industris-space-30"></div>

            <form
                class="home-form contact_post ajaxForm"
                method="post"
                action="{{route('contact_post')}}"
                data-name="contact_post">
                {{csrf_field()}}

                <div class="row">
                    <div class="col-md-4 mb-10">
                        <div class="form-group">
                            <input type="text" name="f_name" class="cls form-control" id="f_name"
                                   placeholder="{{lang_name('f_Name')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-4 mb-10">
                        <div class="form-group">
                            <input type="text" name="l_name" class="cls form-control" id="l_name"
                                   placeholder="{{lang_name('l_Name')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-4 mb-10">
                        <div class="form-group">
                            <input type="email" name="email" class="cls form-control" id="email"
                                   placeholder="{{lang_name('Email')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-4 mb-10">
                        <div class="form-group">
                            <input type="text" name="phone" class="cls form-control" id="phone"
                                   placeholder="{{lang_name('Phone')}}"
                            >
                        </div>
                    </div>
                    <div class="col-md-4 mb-10">
                        <div class="form-group">
                                    <textarea class=" cls form-control" id="summary" name="summary" rows="6"
                                              placeholder="{{$lang->Comments}}"></textarea>
                        </div>
                    </div>
                    <div class="col-md-3 mb-10">
                        <div class="form-group">
                            <button type="submit"
                                    class="wpcf7-form-control wpcf7-submit btn btn-primary btn-full-width">{{lang_name('Submit_now')}}
                                <i
                                    class="icon ion-md-checkmark-circle"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>

    <section style="background-image: url('{{setting()->services()}}');">
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-8">
                    <h4 class="text-primary">{{lang_name('FEATURED_PROJECT')}}</h4>
                    <h2 class="text-white no-margin-bottom">{{lang_name('The_great_work_we_did')}}</h2>
                </div>
                <div class="col-md-4 text-right align-self-end">
                    <a class="text-white industris-lineheight"
                       href="{{route('services')}}">{{lang_name('View_all_services')}} <i
                            class="icon ion-md-add-circle-outline"></i> </a>
                </div>
            </div>
            <div class="industris-space-20"></div>

            <div class="row">
                <div class="col-md-12">

                    <div class="project-feature-slider project-feature" data-show="3" data-arrow="true">

                        @if(category()->count() != 0)
                            @foreach(category() as $r)
                                <div class="project-item col-lg-4 col-sm-6">
                                    <div class="inner">
                                        <img style="height: 440px;" src="{{$r->img()}}" alt="{{$r->name()}}">
                                        <div class="project-info">
                                            <div class="project-meta">{{$r->date('')}}</div>
                                            <div class="project-content">
                                                <h3><a href="{{$r->route()}}">{{$r->name()}}</a></h3>
                                                <p>{{$r->sub_name()}}</p>
                                                <a href="{{$r->route()}}">{{lang_name('Read_More')}} <i
                                                        class="icon ion-md-add-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="industris-space-90"></div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-7 ">
                    <h4 class="text-primary">{{lang_name('TESTIMONIAL')}}</h4>
                    <h2>{{lang_name('What_our_customers_say')}}</h2>

                    <div class="testi-slider-2" data-show="1" data-arrow="false" data-dots="true">

                        @if($Testimonials->count() != 0)
                            @foreach($Testimonials as $r)
                                <div>
                                    <div class="testi-item">
                                        <div class="testi-content">
                                            <i class="icon ion-md-quote"></i>
                                            <p>{!! $r->summary() !!}</p>
                                        </div>
                                        <div class="testi-info">
                                            <img src="{{$r->img()}}" alt="{{$r->name()}}" class="circle-img">
                                            <h4>{{$r->name()}}<span>{{$r->bio()}}</span></h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                    <div class="industris-space-sm"></div>
                </div>
                <div class="col-md-offset-1 col-md-4 about-border-left">
                    {!! $fact->summary() !!}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light padding-bottom-medium">
        <div class="container">
            <div class="row flex-row">

                <div class="col-md-6">
                    <h4 class="text-primary">{{lang_name('THE_NEWS')}}</h4>
                    <h2 class="no-margin-bottom">{{lang_name('Lates_News_form_us')}}</h2>
                </div>
                <div class="col-md-6 text-right align-self-end">
                    <a class="industris-lineheight" href="{{route('blog')}}">{{lang_name('View_all_post')}}<i
                            class="icon ion-md-add-circle-outline"></i></a>
                </div>
            </div>
            <div class="industris-space-50"></div>

            <div class="row">

                @if($blog->count() != 0)
                    @foreach($blog as $r)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <article class="post-box post type-post entry">
                                <div class="entry-media">
                                    <a href="{{$r->route()}}">
                                        <img style="height: 207px;" src="{{$r->img()}}" alt="{{$r->name()}}">
                                    </a>
                                </div>
                                <div class="inner-post">
                                    <header class="entry-header">

                                        <div class="entry-meta">
				                        <span class="posted-on">
				                        	<span class="entry-date published">{{$r->date()}}</span>
				                        </span>
                                        </div>
                                        <!-- .entry-meta -->
                                        <h3 class="entry-title"><a href="{{$r->route()}}"
                                                                   rel="bookmark">{{$r->name()}}</a>
                                        </h3>
                                    </header>
                                    <!-- .entry-header -->

                                    <div class="entry-summary">
                                        <p> {{$r->tags()}}</p>
                                    </div>
                                    <!-- .entry-content -->

                                    <footer class="entry-footer">
                                        <a class="post-link" href="{{$r->route()}}">{{lang_name('Read_More')}}<i
                                                class="icon ion-md-add-circle-outline"></i></a>
                                    </footer>
                                    <!-- .entry-footer -->
                                </div>
                            </article>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>

@endsection
