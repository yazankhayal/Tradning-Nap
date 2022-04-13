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
                    <div class="industris-space"></div>
                </div>
            </div>
        </div>
    </section>

@endsection
