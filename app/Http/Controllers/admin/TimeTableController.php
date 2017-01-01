<?php

namespace App\Http\Controllers\admin;

use App\TimeTables;
use App\TimeTableYear;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TimeTableController extends Controller
{
    public function getTimeTableList()
    {


        $data['pageTitle'] = "Time Table";

        $data['scheduleData'] = TimeTableYear::select('*')->get();


//        return $data;
        return view('admin.pages.timeTable.timeTableList', compact('data'));
    }

    public function postSaveYearBatch()
    {

        $forYear = Input::get('forYear');
        $yearGroupName = Input::get('yearGroupName');
        $batch_year_name_slug = str_slug($yearGroupName, '-');


//        return $time_table_slug;
        $data = [
            'batch_year' => $forYear,
            'yearGroupName' => $yearGroupName,
            'batch_year_name_slug' => $batch_year_name_slug
        ];
        $rule = [
            'batch_year' => 'required|unique:time_table_year',
            'yearGroupName' => 'required',
            'batch_year_name_slug' => 'required|unique:time_table_year'
        ];

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {

            $saveYearBatch = new TimeTableYear();

            $saveYearBatch->batch_year_name = $yearGroupName;
            $saveYearBatch->batch_year = $forYear;
            $saveYearBatch->batch_year_name_slug = $batch_year_name_slug;

            $saveYearBatch->save();

            Session::flash('success', 'New Schedule Added');

            return Redirect::back()->withData('data');

        }


    }


    public function getAddNewBatch($year)
    {

        $data['yearBatch'] = TimeTableYear::select('*')->where('batch_year', '=', $year)->first();


        $data['pageTitle'] = "Add New Schedule for " . $data['yearBatch']->batch_year;
        $data['formName'] = "Add schedule form";


        $data['forTable'] = TimeTables::select('*')->where('batch_year', '=', $data['yearBatch']->batch_year)->Paginate(10);


//        return $data['forTable'];

        return view('admin.pages.timeTable.addTimeTable', compact('data'));

    }

    public function postAddNewBatch()
    {


        $data['pageTitle'] = "Add New Schedule";
        $data['formName'] = "Add schedule form";


        $forYear = Input::get('forYear');
        $yearGroupName = Input::get('yearGroupName');
        $yearBatchName = Input::get('yearBatchName');
        $forClass = Input::get('forClass');
        $forSubject = Input::get('forSubject');
        $faculty = Input::get('faculty');
        $dayOne = Input::get('dayOne');
        $dayOneTime = Input::get('dayOneTime');
        $dayTwo = Input::get('daytwo');
        $dayTwoTime = Input::get('dayTwoTime');


        $time_table_slug = str_slug($yearBatchName, '-');


        $data = [
            'forYear' => $forYear,
            'yearGroupName' => $yearGroupName,
            'yearBatchName' => $yearBatchName,
            'forClass' => $forClass,
            'forSubject' => $forSubject,
            'faculty' => $faculty,
            'dayOne' => $dayOne,
            'dayOneTime' => $dayOneTime,
            'daytwo' => $dayTwo,
            'dayTwoTime' => $dayTwoTime,
            'time_table_slug' => $time_table_slug


        ];


        $rule = [
            'forYear' => 'required',
            'yearGroupName' => 'required',
            'yearBatchName' => 'required',
            'forClass' => 'required',
            'forSubject' => 'required',
            'faculty' => 'required',
            'dayOne' => 'required',
            'dayOneTime' => 'required',
            'time_table_slug' => 'required|unique:time_table'

        ];
        $validator = Validator::make($data, $rule);


        if ($validator->fails()) {


            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {


            $saveSchedule = new TimeTables();

            $saveSchedule->batch_year_name = $yearGroupName;
            $saveSchedule->batch_year = $forYear;
            $saveSchedule->batch_name = $yearBatchName;
            $saveSchedule->time_table_slug = $time_table_slug;
            $saveSchedule->class = $forClass;
            $saveSchedule->subject = $forSubject;
            $saveSchedule->faculty = $faculty;
            $saveSchedule->day_one = $dayOne;
            $saveSchedule->day_one_time = $dayOneTime;
            $saveSchedule->day_two = $dayTwo;
            $saveSchedule->day_two_time = $dayTwoTime;

            $saveSchedule->save();

            Session::flash('success', 'New Schedule Added');

            return Redirect::back()->withData('data');


        }


//        return view('admin.pages.timeTable.addTimeTable', compact('data'));

    }

    public function getScheduleTable($year)
    {

        $data['pageTitle'] = 'Schedule for year '.$year;
        $data['year']=$year;

        $data['dataSortedTable'] = TimeTables::select('*')->where('batch_year', '=', $year)->get();


//        return $data['dataSortedTable'];

        return view('admin.pages.timeTable.scheduleWiseTable', compact('data'));

    }


    public function postDeleteOneSchedule($slug)
    {


        $data['deleteSchedule'] = TimeTables::where('time_table_slug', '=', $slug)->delete();


        if ($data['deleteSchedule'] == '1') {
            Session::flash('success', 'Schedule Deleted Successfully');
            return redirect()->back();
        } else {
            Session::flash('fail', 'Oops Something went wrong');
            return redirect()->back();
        }

    }

    public function getEditScheduleForm($slug)
    {


        $data['editSchedule'] = TimeTables::where('time_table_slug', '=', $slug)->first();


//        return $data['editSchedule'];
        $data['formName'] = 'Edit Schedule Form';
        $data['pageTitle'] = 'Edit Schedule ' . $data['editSchedule']->batch_year;

        return view('admin.pages.timeTable.editTimeTable', compact('data'));

    }

    public function postEditScheduleForm($id)
    {



        $forYear = Input::get('forYear');

        $batchName = Input::get('batchName');
        $forClass = Input::get('forClass');
        $forSubject = Input::get('forSubject');
        $faculty = Input::get('faculty');
        $dayOne = Input::get('dayOne');
        $dayOneTime = Input::get('dayOneTime');
        $dayTwo = Input::get('daytwo');
        $dayTwoTime = Input::get('dayTwoTime');
        $time_table_slug = str_slug($batchName, '-');





//        return $forYear;
        $data = [
            'forYear' => $forYear,

            'batchName' => $batchName,
            'forClass' => $forClass,
            'forSubject' => $forSubject,
            'faculty' => $faculty,
            'dayOne' => $dayOne,
            'dayOneTime' => $dayOneTime,
            'daytwo' => $dayTwo,
            'dayTwoTime' => $dayTwoTime,
            'time_table_slug' => $time_table_slug


        ];


        $rule = [
            'forYear' => 'required',

            'batchName' => 'required',
            'forClass' => 'required',
            'forSubject' => 'required',
            'faculty' => 'required',
            'dayOne' => 'required',
            'dayOneTime' => 'required',
            'time_table_slug' => 'required'

        ];
        $validator = Validator::make($data, $rule);



        if ($validator->fails()) {


            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {



            $saveSchedule = TimeTables::find($id);


            $saveSchedule->batch_year = $forYear;
            $saveSchedule->batch_name = $batchName;
            $saveSchedule->time_table_slug = $time_table_slug;
            $saveSchedule->class = $forClass;
            $saveSchedule->subject = $forSubject;
            $saveSchedule->faculty = $faculty;
            $saveSchedule->day_one = $dayOne;
            $saveSchedule->day_one_time = $dayOneTime;
            $saveSchedule->day_two = $dayTwo;
            $saveSchedule->day_two_time = $dayTwoTime;

            $saveSchedule->save();

            Session::flash('success', 'Schedule Edited Successfully');
//            return 1;

            return redirect()->route('view.schedule.table',$forYear);
//        $data['inputAll']=Input::all();

//        return $data;
        }
    }



    public function postDeleteTimeTableSession($session){


        $data['deleteTimetable']=TimeTableYear::where('batch_year',$session)->delete();

        if ($data['deleteTimetable'] == '1') {

            $data['timeTable']=TimeTables::where('batch_year',$session)->delete();

            if($data['timeTable']=='1'){

                Session::flash('success', 'Schedule Deleted Successfully');
                return redirect()->back();
            }
            else{
                Session::flash('success', 'Schedule Deleted Successfully');
                return redirect()->back();
            }

            Session::flash('fail', 'Oops Something went wrong');
            return redirect()->back();
        } else {
            Session::flash('fail', 'Oops Something went wrong');
            return redirect()->back();
        }

    }


}
