<?php

namespace App\Http\Controllers\student;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function getStudentDashboard(){

        return view('student.studentDashBoard');
    }
}
