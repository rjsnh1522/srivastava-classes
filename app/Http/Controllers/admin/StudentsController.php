<?php

namespace App\Http\Controllers\Admin;

use App\StudentHasBatch;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{


    public function getAllStudents(){

        $data['pageTitle']='Student List';
        $data['allStudents']=DB::table('users')
            ->leftJoin('students','users.email','=','students.email')
            ->leftJoin('students_info','users.email','=','students_info.email')
            ->select('*')
            ->where('users.user_type','4')
            ->get();

        return view('admin.pages.students.listStudents',compact('data'));
    }




    public  function getViewSingleStudents($email){

        $data['student']=DB::table('users')
            ->leftJoin('students','users.email','=','students.email')
            ->leftJoin('students_info','users.email','=','students_info.email')
            ->select('*')
            ->where('users.user_type','4')
            ->where('users.email','=',$email)
            ->first();


//        selecting time table
        $data['batchIds']=StudentHasBatch::select('phy_id','chem_id','math_id','bio_id')
            ->where('email',$email)->first();
        $array=array();
        array_push($array,$data['batchIds']->phy_id,$data['batchIds']->chem_id,$data['batchIds']->math_id,$data['batchIds']->bio_id);
        $data['timetable']=DB::table('time_table')
            ->whereIn('schedule_id',$array)
            ->get();


        $data['pageTitle']="Personal Information of ".$data['student']->name;
        $data['formName']="".$data['student']->name;

        return view('admin.pages.students.single_student',compact('data'));
    }


    public function postDisableStudent($email){



        $findStudent=User::where('email',$email)->first();


        if($findStudent->status==1){
            $findStudent->status=2;
            $findStudent->save();
            Session::flash('success', 'Student Disabled !!');
            return redirect()->back();
        }
        else{
            $findStudent->status=1;
            $findStudent->save();
            Session::flash('success', 'Student Enabled !!');
            return redirect()->back();
        }

        Session::flash('fail', 'Something went wrong! Please try again');
        return redirect()->back();


    }


}
