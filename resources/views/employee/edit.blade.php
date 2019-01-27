@foreach($employee as $employee)
@extends('layout.sb-admin')
@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="{{ route('employee.update',  $employee->employee_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="form-group">
                <label for="txt_name">Name</label>
                <input type="text" name="txt_name" id="txt_id" value="{{$employee->employee_name}}" class="form-control"/><br/>
                </div>
                <div class="form-group">
                <label for="txt_addres">Address</label>
                <input type="text" name="txt_addres" id="txt_id" value="{{$employee->employee_address}}" class="form-control"/><br/>
                </div>
                <div class="form-group">
                <label for="txt_phone_number">Phone Number</label>
                <input type="text" name="txt_phone_number" id="txt_id" value="{{$employee->employee_phone_number}}" class="form-control"/><br/>
                </div>
                <input type="submit" class="btn btn-outline btn-success"name="sbm_save" id="sbm_save" value="save"/>
                </form>                                   
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
@endforeach
@endsection