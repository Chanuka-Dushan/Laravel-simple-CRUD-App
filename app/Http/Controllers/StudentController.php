<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function Addstudent(){
        return view("index");
    }
    public function save(Request $request){

        Student::create([
           'name'=>$request->username,'student_email'=>$request->email,'student_pass'=>$request->password
        ]);
        $notification=["message"=>"Student has ben added"];
        return redirect()->back()->with($notification);
    }
}
