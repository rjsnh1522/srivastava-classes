<?php

namespace App\Http\Controllers\student;

use App\TimeTables;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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

//            return $yearToSearch;
//        return Input::all();
        if ($selectedSubject != "" && $selectedClass != "") {
            $data['dataTimeTable'] = TimeTables::where('batch_year', $yearToSearch)->where('class', '=', $selectedClass)->where('subject', '=','            $data[\'dataTimeTable\'] = TimeTables::where(\'batch_year\', $yearToSearch)->where(\'class\', \'=\', $selectedClass)->where(\'subject\', \'=\', Mathematics)->get();
')->get();

            return $data;

            Session::flash('dataForTable', 'data');
            return redirect()->back()->withInput()->with('dataTimeTable', $data['dataTimeTable']);
        } else {
            Session::flash('fail', 'Please select Subject and Class both to search');
            return redirect()->back();
        }


    }

    public function postStudentBatchResponse($id,$sub){






    }

    public function checkSubject(){



    }


}
