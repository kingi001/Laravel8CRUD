@extends('students.layout')
@section('content')
<div class="col-md-18">
    <div class="panel panel-default">
        <div class="panel-heading">

<div class="row">

        <div class="col-md-6">
        <div><i class="fa fa-users" aria-hidden="true"></i>
        ADD NEW STUDENT</div>

            

        </div>

        <div class="col-md-6" >

            <a class="btn btn-primary pull-right" href="{{ route('students.index') }}">students<i class="fa fa-eye" aria-hidden="true"></i>
</a>

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





<form id="ajax-reg" action="{{ route('students.store') }}" method="POST" class="wizard-form steps-validation" enctype="multipart/form-data">

    @csrf

                <fieldset>

     <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label>Full Name: <span class="text-danger">*</span></label>

                <input type="text" name="full_names" class="form-control" placeholder="Students full names">

            </div>

        </div>

        <div class="col-md-6">

            <div class="form-group">

                <label>Registration No: <span class="text-danger">*</span></label>

                <input type="text" name="registration_no" class="form-control" placeholder="Registration number">

            </div>

        </div>
     </div>
     <div class="row">

        <div class="col-md-3">

            <div class="form-group">

                <label>Email Address: <span class="text-danger">*</span></label>

                <input type="text" name="email_address" class="form-control" placeholder="Email address">

            </div>

        </div>

        <div class="col-md-3">

            <div class="form-group">

                <label>Course: <span class="text-danger">*</span></label>

                <input type="text" name="course" class="form-control" placeholder="Course">

            </div>

        </div>

        <div class="col-md-3">

            <div class="form-group">

                <label>Mobile No: <span class="text-danger">*</span></label>

                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">

            </div>

        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Date of Birth:</label>
                <input name="dob" value="                {{ date('D, d/m/Y H:i:s A') }}
 type="text" class="form-control date-pick" placeholder="Select Date...">

            </div>
        </div>

     </div>
     <div class="row">




        <div class="col-md-6">

            <div class="form-group">

                <label class="d-block">Upload Passport Photo: <span class="text-danger">*</span></label>

                <input type="file" name="image" class="form-control" placeholder="image">

                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>



            </div>

        </div>
        <div class="col-md-3">
            <label for="state_id">County: <span class="text-danger">*</span></label>
            <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                <option value="1">Mombasa</option>
                <option value="2">Nairobi</option>

                {{--  @foreach($states as $st ?? !!)
                    <option {{ (old('state_id') == $st->id ? 'selected' : '') }} value="{{ $st->id }}">{{ $st->name }}</option>
                @endforeach
                --}}
            </select>
        </div>

        <div class="col-md-3">
            <div class="form-group">
                <label for="gender">Gender: <span class="text-danger">*</span></label>
                <select class="select form-control" id="gender" name="gender" required data-fouc data-placeholder="Choose..">
                    <option value=""></option>
                    <option {{ (old('gender') == 'Male') ? 'selected' : '' }} value="Male">Male</option>
                    <option {{ (old('gender') == 'Female') ? 'selected' : '' }} value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>
     <div class="row">

        <div class="col-md-6">

            <div class="form-group">

                <label>Parent/guardian name: <span class="text-danger">*</span></label>

                <input type="text" name="email_address" class="form-control" placeholder="parent full name">

            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">

                <label  class="col-sm-6 control-label">Area of Residence: <span class="text-danger">*</span></label>

                <input type="text" name="email_address" class="form-control" placeholder="residential area">

            </div>
            </div>



        <div class="col-xs-12 col-sm-16 col-md-12 text-center">

                <button type="submit" class="btn btn-success" >ADD STUDENT<i class="fa fa-plus-circle" aria-hidden="true"></i>
</button>

        </div>

    </div>
                </fieldset>




</form>
</div>
</div>

@endsection
