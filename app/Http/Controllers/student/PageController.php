<?php

namespace App\Http\Controllers\student;

use App\StudentHasBatch;
use App\StudentInfo;
use App\TimeTables;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{

    public function getStudentDashboard(){


        $email=Session::get('email');
        $data['studentInfo']=StudentInfo::where('email',$email)->first();
        $data['batchIds']=StudentHasBatch::select('phy_id','chem_id','math_id','bio_id')
                         ->where('email',$email)->first();

        $array=array();
        array_push($array,$data['batchIds']->phy_id,$data['batchIds']->chem_id,$data['batchIds']->math_id,$data['batchIds']->bio_id);



        $data['timetable']=DB::table('time_table')
            ->whereIn('schedule_id',$array)
            ->get();

        return view('student.studentDashBoard',compact('data'));
    }
}
