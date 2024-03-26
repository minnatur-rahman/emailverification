<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //___student show method__//
   public function create()
   {
    return view('admin.create');
   }

   //___student data store method__//
   public function store(Request $request)
   {
    $validateData = $request->validate([
              'name' => 'required|max:25|min:4',
              'phone' => 'required|unique:students|max:12|min:9',
              'email' => 'required|unique:students'
    ]);

     $student = new Student;
     $student->name=$request->name;
     $student->email=$request->email;
     $student->phone=$request->phone;

     $student->save();



   }

}
