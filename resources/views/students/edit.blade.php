@extends('students.layout')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Student</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>

            </div>

        </div>

    </div>



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



    <form action="{{ route('students.update',$student->id) }}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('PUT')



         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Full Names</strong>

                    <input type="text" name="full_names" value="{{ $student->full_names }}" class="form-control" placeholder="Name">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Registration Number</strong>

                    <input type="text" name="registration_no" value="{{ $student->registration_no }}" class="form-control" placeholder="registaration Number">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Email Address</strong>

                    <input type="text" name="email_address" value="{{ $student->email_address }}" class="form-control" placeholder="Email Address">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Course:</strong>

                    <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="course">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Mobile Number:</strong>

                    <input type="text" name="mobile_number" value="{{ $student->mobile_number }}" class="form-control" placeholder="mobile number">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Image:</strong>

                    <input type="file" name="image" class="form-control" placeholder="image">

                    <img src="/image/{{ $student->image }}" width="300px">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>



    </form>

@endsection
