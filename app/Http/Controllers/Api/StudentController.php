<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function store(Request $request)
    {
        # code...
        // return response()->json([
        //     "status"  => 200,
        //     "message" => $request->all()
        // ]);
        $create = new Student;
        $create->name   = $request->name;
        $create->course = $request->course;
        $create->email  = $request->email;
        $create->phone  = $request->phone;
        $create->save();
        return response()->json([
            "status"  => 200,
            "message" => " Student Added Successfully"
        ]);
   }
}
