@extends('layouts.app')

@section('title')
    {{$lang->Services}}
@endsection

@section('content')


    @includeIf("layouts.breadcrumb")

    <section class="">
        <div class="container">
            <h4>{{lang_name('FEATURED_PROJECT')}}</h4>
            <h2>{{lang_name('The_great_work_we_did')}}</h2>
            <div class="space-30" style="height: 30px"></div>
            <div class="row">

                @include("data.services")

            </div>
        </div>
    </section>

@endsection
