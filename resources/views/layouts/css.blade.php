<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>{{setting()->name()}}-@yield('title')</title>

@yield("seo")

<meta charset="utf-8">
<link rel="shortcut icon" href="{{path().setting()->fav}}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{path().setting()->fav}}">

<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" id="bootstrap-css" href="{{path()}}files/home/css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" id="awesome-font-css" href="{{path()}}files/home/css/font-awesome.css" type="text/css" media="all">
<link rel="stylesheet" id="ionicon-font-css" href="{{path()}}files/home/css/ionicon.css" type="text/css" media="all">
<link rel="stylesheet" id="slick-slider-css" href="{{path()}}files/home/css/slick.css" type="text/css" media="all">
<link rel="stylesheet" id="slick-theme-css" href="{{path()}}files/home/css/slick-theme.css" type="text/css" media="all">
<link rel="stylesheet" id="magnific-popup-css" href="{{path()}}files/home/css/magnific-popup.css" type="text/css" media="all">
<link rel="stylesheet" id="industris-style-css" href="{{path()}}files/home/style.css" type="text/css" media="all">
<link rel="stylesheet" id="industris-style-css" href="{{path()}}files/home/main.css" type="text/css" media="all">

@if(app()->getLocale() == "ar")
    <link rel="stylesheet" href="{{path()}}files/home/css/rtl.css">
@endif

<link rel="stylesheet" href="{{path()}}css/toastr.min.css">
<link rel="stylesheet" href="{{path()}}nprogress-master/nprogress.css"/>
@if(scripts())
    @if(scripts()->css)
        {!! scripts()->css !!}
    @endif
@endif
