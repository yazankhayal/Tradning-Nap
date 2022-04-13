@extends('layouts.app')

@section('title')
    {{$lang->Blog}}
@endsection

@section('content')

    @includeIf("layouts.breadcrumb")

    <section>
        <div class="container">
            <div class="row flex-row">
                <div class="col-md-6">
                    <h4 class="text-primary">{{lang_name('THE_NEWS')}}</h4>
                    <h2 class="no-margin-bottom">{{lang_name('Lates_News_form_us')}}</h2>
                </div>
            </div>
            <div class="industris-space-50"></div>

            <div class="row">

                @include("data.blog")

                <div class="col-md-12 col-sm-12">
                    <nav>
                        {{$items->render()}}
                    </nav>
                </div>

            </div>
        </div>
    </section>

@endsection
