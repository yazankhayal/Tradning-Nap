<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{path().setting()->fav}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{path().setting()->fav}}">
    <title> {{setting()->name()}} - @yield('title')</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{path()}}files/dash_board/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{path()}}files/dash_board/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{path()}}files/dash_board/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">
    <div class="login-logo">
        <a href="{{route('index')}}">
            {{setting()->name()}}
        </a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            @yield('content')
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="{{path()}}files/dash_board/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{path()}}files/dash_board/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{path()}}files/dash_board/dist/js/adminlte.min.js"></script>
</body>
</html>
