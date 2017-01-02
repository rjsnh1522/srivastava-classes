<?php

namespace App\Http\Controllers\student;

use App\StudentHasBatch;
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


//        findStudent to see if student has batch or not

        $studEmail=Session::get('email');

        $da['findStudent']=DB::table('students')
            ->leftjoin('students_info','students.email','=','students_info.email')
            ->leftjoin('student_has_batches','students.email','=','student_has_batches.email')
            ->where('students.email','=',$studEmail)->get();


//        return $da;


        if ($selectedSubject != "" && $selectedClass != "") {
            $data['dataTimeTable'] = TimeTables::where('batch_year', $session)->where('class', '=', $selectedClass)->where('subject', '=',$selectedSubject)->get();

            Session::flash('dataForTable', 'data');

            session::flash('findStudent','da');

            return redirect()->back()->withInput()->with('dataTimeTable', $data['dataTimeTable'])->with('findStudent',$da['findStudent']);

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

        // find subject on basis of $id
        $assignBatch=StudentHasBatch::where('email',$studEmail)->first();
        switch ($sub){

            case 'Physics':
                if($assignBatch->phy_id==''){
                    $assignBatch->phy_id=$id;
                    $assignBatch->save();
                    Session::flash('success', 'Batch Added successfully');
                    return redirect()->back();
                }else{
                    $assignBatch->phy_id='';
                    $assignBatch->save();
                    Session::flash('success', 'Batch removed successfully');
                    return redirect()->back();
                }
                break;
            case 'Chemistry':
                if($assignBatch->chem_id==''){
                    $assignBatch->chem_id=$id;
                    $assignBatch->save();
                    Session::flash('success', 'Batch added successfully');
                    return redirect()->back();
                }else{
                    $assignBatch->chem_id='';
                    $assignBatch->save();
                    Session::flash('success', 'Batch removed successfully');
                    return redirect()->back();
                }
                break;
            case 'Mathematics':
                if($assignBatch->math_id==''){
                    $assignBatch->math_id=$id;
                    $assignBatch->save();
                    Session::flash('success', 'Batch added successfully');
                    return redirect()->back();
                }else{
                    $assignBatch->math_id='';
                    $assignBatch->save();
                    Session::flash('success', 'Batch removed successfully');
                    return redirect()->back();
                }
                break;
            case 'Biology':
                if($assignBatch->bio_id==''){
                    $assignBatch->bio_id=$id;
                    $assignBatch->save();
                    Session::flash('success', 'Batch added successfully');
                    return redirect()->back();
                }else{
                    $assignBatch->bio_id='';
                    $assignBatch->save();
                    Session::flash('success', 'Batch removed successfully');
                    return redirect()->back();
                }
                break;
            default :
                Session::flash('fail', 'Oops Something went wrong');
                return redirect()->back();
                break;
        }
        Session::flash('fail', 'Oops Something went wrong');
        return redirect()->back();
    }

}
