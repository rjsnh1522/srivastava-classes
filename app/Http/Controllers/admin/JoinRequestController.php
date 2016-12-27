<?php

namespace App\Http\Controllers\admin;

use App\Student;
use App\StudentHasBatch;
use App\StudentInfo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;


class JoinRequestController extends Controller
{

    public function getJoinRequest(){

        $data['pageTitle']="Join Requests";
        $data['allRequests']=User::where('status','=',0)->where('user_type','=',4)->get();
        return view('admin.pages.contactMessage.joinRequest',compact('data'));

    }


    public function getDeleteJoinRequest($email){
        $deleteMessage=User::where('email','=',$email)->get()->first();
        $deletedOrNot=$deleteMessage->delete();
        if ($deletedOrNot == '1') {

            Session::flash('success', 'Join Request deleted successfully!!');

            return redirect()->back();

        } else {

            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }


    }

    public function postEnableDisable($emailId){


        $findStud=User::where('email',$emailId)->first();

        if($findStud==''){

            Session::flash('fail', 'No Record Found!!');
            return redirect()->back();

        }
        else{

            $findStud->status=1;
            $findStud->save();
            $student=new Student();
            $student->email=$findStud->email;
            $student->mobile=$findStud->mobile;
            $student->accepted_by=Session::get('name');
            $student->save();
            $studentInfo=new StudentInfo();
            $studentInfo->email=$findStud->email;
            $studentInfo->save();
            $studentBatch=new StudentHasBatch();
            $studentBatch->email=$findStud->email;
            $studentBatch->save();
            Session::flash('success', 'Student enabled now he can login!!');
            return redirect()->back();
        }



    }

}
