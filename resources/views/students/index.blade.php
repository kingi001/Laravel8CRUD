@extends('students.layout')



@section('content')
<div class="col-md-18">
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
            <div class="col-md-6" id="showSearch">
                <i class="fa fa-search">Search</i>
            </div>
            <div class="col-md-6" id="showSearch">
                <i class="fa fa-filter">Filter</i>
            </div>

        </div>

    </div>


    <div class="panel-body">

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">
        <tr>

            <thead>
            <th width="10">#</th>
            <th width="10"><i class="fa fa-check"></i></th>

            {{-- <th>No</th> --}}
            <th width="120px">Names</th>
            <th>RegNo</th>
            <th>Email </th>
            <th>Course</th>
            <th>Mobile_No</th>
            <th>Image</th>
             <th>Date</th >
            {{--  <th width="250px">Action</th>--}}
        </thead>


        </tr>


        @foreach ($students as $student)



        <tr>
            <td>{{ ++$i}}</td>

            <td><input type="checkbox" data-id="{{ $student['id'] }}" name="students[]" value="{{ $student['id'] }}"></td>

            {{-- <td>{{ ++$i }}</td> --}}

            <td>{{ $student->full_names }}</td>

            <td>{{ $student->registration_no }}</td>

            <td>{{ $student->email_address }}</td>

            <td>{{ $student->course }}</td>

            <td>{{ $student->mobile_number}}</td>

            <td><img src="/image/{{ $student->image }}" width="80px"></td>

            <td>{{ $student->created_at }}</td>

          {{--  <td>

                <form action="{{ route('students.destroy',$student->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('students.show',$student->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('students.edit',$student->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>


        </tr>--}}

        @endforeach

    </table>
    <div class="form-group">
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

    {!! $students->links() !!}



@endsection
