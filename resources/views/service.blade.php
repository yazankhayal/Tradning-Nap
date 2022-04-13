@extends('layouts.app')

@section('title')
    {{$item->name()}}
@endsection


@section('content')

    @includeIf("layouts.breadcrumb")

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4 class="text-primary">{{$item->name()}}</h4>
                    <img style="width: 100%;height: auto;" src="{{$item->img()}}" alt="{{$item->name()}}">
                    <div class="industris-space"></div>
                    {!! $item->summary() !!}
                    <hr>
                    @if(count(explode(",",$item->files)) != 0)
                        <div class="row">
                            @foreach(explode(",",$item->files) as $key => $value)
                                @if($value)
                                    <div class="col-md-4 mb-10">
                                        <img style="width: 100%;height: 220px;" src="{{path().'upload/gallery_products/'.$value}}" alt="{{$value}}">
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endif
                    <div class="industris-space"></div>

                    <h4 class="text-primary">{{lang_name('REATURED_PROJECT')}}</h4>
                    <h2>{{lang_name('Projects_in_the_field')}}</h2>

                    <div class="project-feature-slider" data-show="2" data-arrow="true">

                        {!! $item->Related() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
