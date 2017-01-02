<?php

namespace App\Http\Controllers\student;

use App\TimeTables;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class TimeTableController extends Controller
{
    public function getTimeTableSelector()
    {
        $data['pageTitle'] = 'Select Time table';
        $data['formName'] = 'Class and Subject Selector';
        return view('student.pages.timeTable.getSchedule', compact('data'));
    }

    public function getScheduleTable()
    {
        $selectedSubject = Input::get('selectedSubject');
        $selectedClass = Input::get('selectedClass');
        $yearToSearch = date('Y');
        $oneYearlater=$yearToSearch+1;
        $session= $yearToSearch.'-'.$oneYearlater;


        if ($selectedSubject != "" && $selectedClass != "") {
            $data['dataTimeTable'] = TimeTables::where('batch_year', $session)->where('class', '=', $selectedClass)->where('subject', '=',$selectedSubject)->get();

            Session::flash('dataForTable', 'data');
            return redirect()->back()->withInput()->with('dataTimeTable', $data['dataTimeTable']);
        } else {
            Session::flash('fail', 'Please select Subject and Class both to search');
            return redirect()->back();
        }


    }

    public function postStudentBatchResponse($id,$sub){


        $studEmail=Session::get('email');

        $data['findStudent']=DB::table('students')->leftjoin('students_info','students.email','=','students_info.email')
                     ->leftjoin('student_has_batches','students.email','=','student_has_batches.email')
                     ->where('students.email','=',$studEmail)->first();

//        $findTimetable=DB::table('')






        return $data['findStudent']->email;
        return $id.' '.$sub.' '.$studEmail;


    }

    public function checkSubject(){



    }


}
