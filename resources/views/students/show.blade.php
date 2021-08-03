@extends('students.layout')



@section('content')
@section('content')
<div class="col-md-18">
<div class="panel panel-default">
    <div class="panel-heading">

    <div class="row">

            <div class="col-md-6">

                <h2>Student </h2>

            </div>

            <div class="col-md-6">

                <a class="btn btn-primary pull-right" href="{{ route('students.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="panel-body">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Full Names</strong>

                {{ $student->full_names }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Registration number</strong>

                {{ $student->registration_no }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email Address:</strong>

                {{ $student->email_address }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Course:</strong>

                {{ $student->course }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Mobile Number:</strong>

                {{ $student->mobile_number }}

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <img src="/image/{{ $student->image }}" width="500px">

            </div>

        </div>

    </div>
    </div>

@endsection
