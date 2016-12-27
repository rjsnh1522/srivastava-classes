<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{


    public function getAllStudents(){

        $data['pageTitle']='Student List';
        $data['allStudents']=DB::table('users')
            ->leftjoin('students','users.email','=','students.email')
            ->get();


        return view('admin.pages.students.listStudents',compact('data'));
    }
}
