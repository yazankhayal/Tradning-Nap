@extends('layouts.app')

@section('title')
    {{$lang->About}}
@endsection

@section('content')

    @includeIf("layouts.breadcrumb")

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


@endsection
