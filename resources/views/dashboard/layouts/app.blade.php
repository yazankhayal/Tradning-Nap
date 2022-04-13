<!DOCTYPE html>
<html lang="{{app()->getLocale()}}" dir="{{app()->getLocale() == "ar" ? "rtl" : "ltr"}}">
<head>
    @includeIf('dashboard.layouts.css')
    @yield('css')
</head>

<body class="hold-transition sidebar-mini {{sidebar_collapse()}}">
<!-- Site wrapper -->
<div class="wrapper">

    @include("dashboard.layouts.menu")

    @include("dashboard.layouts.sidebar")


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield("title")</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="{{route('dashboard_admin.index')}}">{{$lang->Dashboard}}</a></li>
                            <li class="breadcrumb-item active">@yield("title")</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                @if (trim($__env->yieldContent('create_btn')))
                    <div class="card-header">
                        <a href="@yield('create_btn')" class="btn btn-primary">
                            @yield('create_btn_btn')
                        </a>
                    </div>
                @endif
                <div class="card-body">
                    @yield("content")
                </div>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; {{date('Y')}} <a href="{{route('index')}}">{{setting()->name()}}</a>.</strong> All
        rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>

</div>


<div class="modal" id="ModDelete" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">@lang('delete.title')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{csrf_field()}}
                <input id="iddel" name="id" type="hidden">
                <p class="text-danger">
                    @lang('delete.desc')
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" class="btn_deleted btn btn-primary">Yes</button>
            </div>
        </div>
    </div>
</div>

@includeIf('dashboard.layouts.js')
@yield('js')
<script>
    var step_wizard = 1;
    var geturlphoto = function () {
        return "{{$setting->public}}";
    };
    var date_Ret = function (x) {
        var now = new Date(x);
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear() + "-" + (month) + "-" + (day);
        return today;
    };
    var sweet_alert = function (title, text, icon, button) {
        swal({
            title: title,
            text: text,
            icon: icon,
            button: button,
        });
    }
    $(document).ready(function () {
        "use strict";
        //Code here.
        $('.sumernote').summernote();

        // $( ".date" ).datepicker();

        $(document).on('click', '.btn_menu_click', function () {
            //sidebar-mini sidebar-collapse
            var body = $("body").hasClass("sidebar-mini sidebar-collapse");
            $.ajax({
                url: "{{ route('dashboard_sidebar_mini') }}",
                method: "get",
                data: {
                    "body" : body,
                },
                dataType: "json",
                success: function (result) {
                    if (result.success != null) {
                        toastr.success(result.success);
                    }
                    else{
                        toastr.error(result.error);
                    }
                }
            });
        });
    /*   $(document).on('click', '.sidebar_colors', function () {
       //sidebar-mini sidebar-collapse
         var body = $("body").hasClass("sidebar-mini sidebar-collapse");
         var click = $(this).attr('class');
         var split = click.split(" ")[0];
         var color = split.split("-")[1];
         $.ajax({
             url: "{{ route('dashboard_sidebar_color') }}",
                method: "get",
                data: {
                    "color" : color,
                },
                dataType: "json",
                success: function (result) {
                    if (result.success != null) {
                        toastr.success(result.success);
                    }
                    else{
                        toastr.error(result.error);
                    }
                }
            });
        });*/

        $(document).on('click', '.btn_current_lan', function () {
            $('.trans').val('');
            $('.trans2').summernote('code', '');
        });

        $('.PopUp').on("click", function () {
            $('#button_action').val('insert');
            $('.form-control').val('');
            $('#id').val('');
            $('.sumernote').summernote('code', '');
            $('.avatar_view').addClass('d-none');
            $('.error').remove();
            $('.form-control').removeClass('border-danger');
        });

        $(document).ajaxStart(function () {
            NProgress.start();
        });
        $(document).ajaxStop(function () {
            NProgress.done();
        });
        $(document).ajaxError(function () {
            NProgress.done();
        });

        $('.modal .close').on("click", function () {
            $('#data_Table tbody tr').css('background', 'transparent');
        });

        $('.modal .btn-secondary').on("click", function () {
            $('#data_Table tbody tr').css('background', 'transparent');
        });

        $('.modal .btn-default').on("click", function () {
            $('#data_Table tbody tr').css('background', 'transparent');
        });

        $(document).on('keyup', function (evt) {
            if (evt.keyCode == 27) {
                $('#data_Table tbody tr').css('background', 'transparent');
            }
        });

    });
</script>

</body>

</html>
