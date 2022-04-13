@extends('dashboard.layouts.app')

@section('title')
    {{$lang->Dashboard}}
@endsection

@section('content')

    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Services</span>
                        <span class="info-box-number">
                  {{$s}}
                </span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Posts</span>
                        <span class="info-box-number">{{$s1}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Contacts</span>
                        <span class="info-box-number">{{$s2}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Newsletter Members</span>
                        <span class="info-box-number">{{$s4}}</span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{$lang->Products}}</h5>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table data_Table table-bordered" id="data_Table">
                            <thead>
                            <th>{{$lang->ID}}</th>
                            <th>{{$lang->Name}}</th>
                            <th>{{$lang->Avatar}}</th>
                            <th>{{$lang->Primary}}</th>
                            <th>{{$lang->Option}}</th>
                            </thead>
                        </table>
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div><!--/. container-fluid -->

@endsection

@section('js')
    <script type="text/javascript">
        var ary_data_amen = '[]';
        $(document).ready(function () {

            var datatabe;

            "use strict";
            //Code here.
            Render_Data();

            var name_form = $('.ajaxForm').data('name');

            $(document).on('click', '.btn_delete_current', function () {
                var id = $(this).data("id");
                $('#ModDelete').modal('show');
                $('#iddel').val(id);
                if (id) {
                    $('#data_Table tbody tr').css('background', 'transparent');
                    $('#data_Table tbody #' + id).css('background', 'hsla(64, 100%, 50%, 0.36)');
                }
            });

            $(document).on('click', '.btn_copy', function () {
                var id = $(this).data("id");
                if (id) {
                    $('#data_Table tbody tr').css('background', 'transparent');
                    $('#data_Table tbody #' + id).css('background', 'hsla(64, 100%, 50%, 0.36)');
                }
                $.ajax({
                    url:"{{route('dashboard_products.copy')}}",
                    method:"get",
                    data : {
                        "id" : id,
                    },
                    dataType:"json",
                    success:function(result)
                    {
                        if(result.success != null){
                            toastr.success(result.success);
                            $('#data_Table').DataTable().ajax.reload();
                        }
                        else{
                            toastr.error(result.error);
                        }
                    }
                });
            });

            $('.btn_deleted').on("click", function () {
                var id = $('#iddel').val();
                $.ajax({
                    url: "{{ route('dashboard_products.deleted') }}",
                    method: "get",
                    data: {
                        "id": id,
                    },
                    dataType: "json",
                    success: function (result) {
                        toastr.error(result.error);
                        $('.modal').modal('hide');
                        $('#data_Table').DataTable().ajax.reload();
                    }
                });
            });

        });

        var Render_Data = function () {
            datatabe = $('#data_Table').DataTable({
                "language": {
                    aria: {
                        sortAscending: "{{$lang->sortAscending}}",
                        sortDescending: "{{$lang->sortDescending}}"
                    }
                    ,
                    emptyTable: "{{$lang->emptyTable}}",
                    info: "{{$lang->info}}",
                    infoEmpty: "{{$lang->emptyTable}}",
                    infoFiltered: "{{$lang->infoFiltered}}",
                    lengthMenu: "_MENU_",
                    search: "{{$lang->search}}",
                    zeroRecords: "{{$lang->emptyTable}}",
                    paginate: {
                        sFirst: "{{$lang->paginate_sFirst}}",
                        sLast: "{{$lang->paginate_sLast}}",
                        sNext: "{{$lang->paginate_sNext}}",
                        sPrevious: "{{$lang->paginate_sPrevious}}",
                    }
                },
                "processing": true,
                "serverSide": true,
                "bStateSave": true,
                "fnCreatedRow": function (nRow, aData, iDataIndex) {
                    $(nRow).attr('id', aData['id']);
                },
                "ajax": {
                    "url": "{{ route('dashboard_products.get_data') }}",
                    "dataType": "json",
                    "type": "post",
                    "data": {
                        _token: "{{csrf_token()}}",
                        'filter_role': $('#filter_role').val(),
                    }
                },
                "columns": [
                    {"data": "id"},
                    {"data": "name"},
                    {"data": "avatar"},
                    {"data": "language"},
                    {"data": "options"}
                ]
            });
        };

    </script>

@endsection
