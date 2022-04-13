@extends('layouts.app')

@section('title')
    {{$lang->Contact}}
@endsection

@section('css')
    <style>
        iframe {
            width: 100%;
        }
    </style>
@endsection

@section('content')


    @includeIf("layouts.breadcrumb")

    <section class="bg-contact-info">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <h4 class="text-primary">{{lang_name('CONTACT_INFO')}}</h4>
                    <div class="contact-info">
                        <h2>{{lang_name('Hotline')}} : <span class="text-primary">{{hp_contact()->phone}}</span> </h2>
                        <p><i class="icon ion-md-mail"></i> {{hp_contact()->email}}</p>
                        <p><i class="icon ion-md-pin"></i> {{hp_contact()->address}}</p>
                    </div>
                    <div class="space-industris"></div>
                    <hr>
                </div>
                <div class="col-md-12">

                    <form
                        class="form-contact contact_post ajaxForm"
                        method="post"
                        action="{{route('contact_post')}}"
                        data-name="contact_post">
                        {{csrf_field()}}
                        <h3>{{lang_name('Contact_Us')}}</h3>
                        <div class="row">
                            <div class="col-md-3 form-group mb-10">
                                <input type="text" name="f_name" class="cls form-control" id="f_name"
                                       placeholder="{{lang_name('f_Name')}}"
                                >
                            </div>
                            <div class="col-md-3 form-group mb-10">
                                <input type="text" name="l_name" class="cls form-control" id="l_name"
                                       placeholder="{{lang_name('l_Name')}}"
                                >
                            </div>
                            <div class="col-md-3 form-group mb-10">
                                <input type="email" name="email" class="cls form-control" id="email"
                                       placeholder="{{lang_name('Email')}}"
                                >
                            </div>
                            <div class="col-md-3 form-group mb-10">
                                <input type="text" name="phone" class="cls form-control" id="phone"
                                       placeholder="{{lang_name('Phone')}}"
                                >
                            </div>
                            <div class="col-md-12 form-group mb-10">
                                    <textarea class=" cls form-control" id="summary" name="summary" rows="6"
                                              placeholder="{{$lang->Comments}}"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" value="{{lang_name('Submit_now')}}" class="wpcf7-form-control wpcf7-submit btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>{{lang_name('View_map')}}:</h3>
                    <div class="map">
                        {!! hp_contact()->iframe !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
