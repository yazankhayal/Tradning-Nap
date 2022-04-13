<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Latest updates and statistic charts">
<link rel="shortcut icon" href="{{setting()->fav()}}">
<title> {{setting()->name()}} - @yield('title')</title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{path()}}files/dash_board/plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{path()}}files/dash_board/dist/css/adminlte.min.css">


<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{$path.'css/toastr.min.css'}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{$path.'nprogress-master/nprogress.css'}}"/>

<style>
    .btn .fa {
        color: #Fff !important;
    }
    .tox-notifications-container{
        display:none;
    }
    /***** whatsapp_fixed ********/
    #whatsapp_fixed {
        position: fixed;
        bottom: 45px;
        right: 35px;
        z-index: 99;
    }

    .img_usres {
        width: 150px;
        height:110px;;
    }

    .disabled {
        pointer-events: none;
    }

    .img_flag {
        width: 25px;
        height: 18px;
        margin-right: 5px;
    }
</style>
