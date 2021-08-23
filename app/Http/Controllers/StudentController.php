<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()

    {

        $students = Student::oldest()->paginate(10);

        return view('students.index',compact('students'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
            

    }

    public function create()

    {

        return view('students.create');

    }

    public function store(Request $request)

    {

        $request->validate([

            'full_names' => 'required',

            'registration_no' => 'required',

            'email_address'=>'required',

            'course'=>'required',

            'mobile_number'=>'required',


            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }



        Student::create($input);



        return redirect()->route('students.index')

                        ->with('success','Student Added successfully.!');

    }

    public function show(Student $student)

    {

        return view('students.show',compact('student'));

    }

    public function edit(Student $student)

    {

        return view('students.edit',compact('student'));

    }

    public function update(Request $request, Student $student)

    {

        $request->validate([

            'full_names' => 'required',

            'registration_no' => 'required',

            'email_address'=>'required',

            'course'=>'required',

            'mobile_number'=>'required',


            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);



        $input = $request->all();



        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }



        $student->update($input);



        return redirect()->route('students.index')

                        ->with('success','Student updated successfully');

    }

    public function destroy(Student $student)

    {

        $student->delete();



        return redirect()->route('students.index')

                        ->with('success','Student deleted successfully');

    }

}
