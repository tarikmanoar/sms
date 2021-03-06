@extends('admin.layout.admin')
@section('css')
<link rel="stylesheet" href="{{asset('admin/css/bootstrap-select/bootstrap-select.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/vendors/css/base/switch.css')}}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- Sorting -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h1> <i class="la la-unlock-alt"></i> Teacher Permission</h1>
                </div>
                <div class="widget-body">
                    <form id="getTeacherlist" action="{{route('teacher.filter')}}" method="get" autocomplete="off">
                        <div class="form-group row d-flex align-items-center mt-3 mb-5 justify-content-center">
                            <div class="col-lg-4">
                                <select id="className" name="className"
                                    class="selectpicker show-menu-arrow form-control" data-live-search="true" required>
                                    <option disabled selected>Select Class</option>
                                    @foreach ($class as $cls)
                                    <option value="{{$cls->id}}">{{$cls->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-4">
                                <div class="opt"></div>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-outline-success" type="submit">Filter</button>
                            </div>
                        </div>
                    </form>
                    <div class="student-table text-center">
                        <img src="{{asset('admin/img/empty_box.png')}} " alt="...." class="img-fluid" width="250px">
                        <br>
                        <p>No Data Found</p>
                    </div>
                </div>
            </div>
            <!-- End Sorting -->
        </div>
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->
@endsection
@section('js')
<script src="{{asset('admin/vendors/js/bootstrap-select/bootstrap-select.js')}}"></script>
<script>
    // $('#dbTable').DataTable();
$("#className").on('change',(e)=>{
    const data = $("#className").serialize();
    const url = '{{route("student.section")}}';
    const method = 'get';
    $.ajax({
        url:url,
        method:method,
        data:data,
        success: res=>{
            res = $.parseJSON(res);
            if(res.status == 200){
                $(".opt").html(res.opt);
            }else{
                toast('error',res.error);
            }
        }
    });
});
$("#getTeacherlist").on('submit',(e)=>{
    e.preventDefault();
    const data = $("#getTeacherlist").serialize();
    const url = $("#getTeacherlist").attr('action');
    const method = $("#getTeacherlist").attr('method');
    $.ajax({
        url:url,
        method:method,
        data:data,
        success: res=>{
            res = $.parseJSON(res);
            if(res.status == 200){
                toast('success','Successful!');
                $(".student-table").html(res.student);
            }else{
                toast('error',res.error);
            }
        },
        error: err=>{
            const errors = err.responseJSON;
            if($.isEmptyObject(errors) == false){
                $.each(errors.errors,function(key,value){
                    toast('error',value);
                });
            }
        }
    });
});

function togglePermission(checkbox_id, column_name, teacher_id){

    var value = $('#'+checkbox_id).val();
    if(value == 1){
        value = 0;
    }else{
        value = 1;
    }
    var class_id = $('#className').val();
    var section = $('#section').val();

    $.ajax({
        type: 'get',
        url: '{{route("teacher.modifyPermision")}}',
        data: {class_id : class_id, section : section, teacher_id : teacher_id, column_name : column_name, value : value},
        success: res=>{
            res = $.parseJSON(res);
            if(res.status == 200){
                toast('success','Permission Updated Successfully.');
                readData();
            }else{
                toast('error',res.error);
            }
        },
        error: err=>{
            const errors = err.responseJSON;
            if($.isEmptyObject(errors) == false){
                $.each(errors.errors,function(key,value){
                    toast('error',value);
                });
            }
        }
    });
}


function readData(){
    const data = $("#getTeacherlist").serialize();
    const url = $("#getTeacherlist").attr('action');
    const method = $("#getTeacherlist").attr('method');
    $.ajax({
        url:url,
        method:method,
        data:data,
        success: res=>{
            res = $.parseJSON(res);
            if(res.status == 200){
                toast('success','Successful!');
                $(".student-table").html(res.student);
            }else{
                toast('error',res.error);
            }
        },
        error: err=>{
            const errors = err.responseJSON;
            if($.isEmptyObject(errors) == false){
                $.each(errors.errors,function(key,value){
                    toast('error',value);
                });
            }
        }
    });
}
</script>
@endsection
