@extends('students.layout')



@section('content')
<div class="col-md-18">
    <div class="panel panel-default">
        <div class="panel-heading">

<div class="row">

        <div class="col-md-6">

            <h5>ADD NEW STUDENT</h5>

        </div>

        <div class="col-md-6" >

            <a class="btn btn-primary pull-right" href="{{ route('students.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="panel-body">

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

    @csrf



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Full Names:</strong>

                <input type="text" name="full_names" class="form-control" placeholder="students full names">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Registration Number:</strong>

                <input type="text" name="registration_no" class="form-control" placeholder="Registration number">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email Address:</strong>

                <input type="text" name="email_address" class="form-control" placeholder="Email address">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Course:</strong>

                <input type="text" name="course" class="form-control" placeholder="Course">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Mobile Number:</strong>

                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">

            </div>

        </div>



        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

            

            </div>

        </div>

        <div class="col-xs-12 col-sm-16 col-md-12 text-center">

                <button type="submit" class="btn btn-primary" >Submit</button>

        </div>

    </div>




</form>
</div>

@endsection
