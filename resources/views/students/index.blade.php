@extends('students.layout')
@section('content')
<div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
            <div class="col-md-6">

                <h5><i class="fa fa-info-circle" aria-hidden="true"></i>
                    STUDENTS  DETAILS</h5>

            </div>


            <div class="col-md-6">

                <a class="btn btn-success pull-right" href="{{ route('students.create') }}"> <i class="fa fa-plus" aria-hidden="true"></i>
                    Add New Student</a>

            </div>



        </div>

    </div>


    <div class="panel-body">
        <ul class="nav nav-tabs nav-tabs-highlight">
            <li class="nav-item"><a href="#all-students" class="nav-link active" data-toggle="tab">All Students</a></li>
            
        </ul>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table stripped-button-html5-columns">
        <thead>
        <tr>


            <th width="10px">No</th>
            {{-- <thwidth="10"><iclass="fafa-check"></i></th> --}}

            {{-- <th>No</th> --}}
            <th width="120px">Names</th>
            <th>RegNo</th>
            <th>Email </th>
          <th>Course</th>
            <th>Mobile_No</th>
            <th>Image</th>
             {{-- <th>Date</th > --}}
            <th>Action</th>
            {{--  <th width="250px">Action</th>--}}



        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)



        <tr>
            <td>{{ ++$i}}</td>


            {{-- <td>{{ ++$i }}</td> --}}

            <td>{{ $student->full_names }}</td>

            <td>{{ $student->registration_no }}</td>

            <td>{{ $student->email_address }}</td>

            <td>{{ $student->course }}</td>

            <td>{{ $student->mobile_number}}</td>

            <td><img  src="/image/{{ $student->image }}" width="50px"></td>

            {{-- <td>{{ $student->created_at }}</td> --}}


          <td>

                <form action="{{ route('students.destroy',$student->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>

                    @csrf

                    @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>


        </tr>

        @endforeach


    </tbody>





    </table>

    {{-- <div class="form-group">
        <div class="col-sm-0">&nbsp;</div>
    <form action="{{ route('students.destroy',$student->id) }}" method="POST">
        <a class="btn btn-info" href="{{ route('students.show',$student->id) }}"><i class="fa fa-info-circle" aria-hidden="true"></i>
            Show</a>
        <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
            Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
        Delete</button>
        </div>
    </div>
    </form>
 --}}
    {!! $students->links() !!}
    @if($students->previousPageUrl())
    <a href="{{ route('students.index') . '/url/students/index' . $students->previousPageUrl() }}" class="btn btn-success btn-sm"><i class="fa fa-arrow-circle-left"></i> Back</a>
@endif
@if($students->nextPageUrl())
    <a href="{{ route('students.index') . '/url/' . $students->nextPageUrl() }}" class="btn btn-success pull-right btn-sm">Next <i class="fa fa-arrow-circle-right"></i></a>
    @endif
    </div>
    </div>




@endsection
