<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsersC extends Controller
{
    public function list()
    {
        return  DB::table('tbl_user')                           //////first table name
            ->join('tbl_user_address', 'tbl_user.id', '=', 'tbl_user_address.id')////////second table name tbl_user_address
            ->get();
            return response()->json([
                "message" => "student record show"
            ], 201);
    }

    public function createStudent(Request $request) {
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
  
        return response()->json([
          "message" => "student record created"
        ], 201);
      }
    
}
