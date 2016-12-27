<?php

namespace App\Http\Controllers\visitors;

use App\Achievement;
use App\Contact;
use App\MetaData;
use App\News;
use App\Popup;
use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function getIndexPage(){


        $data['meta']=MetaData::select('*')->where('page_name','homePage')->first();


        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();


//        return $data['popup'];



//        $data['active']='homePage';

//        return $data['meta']->description;


        return view('visitors.pages.home',compact('data'));
    }



    public function getAboutPage(){

//        $data['active']='active';
        $data['meta']=MetaData::select('*')->where('page_name','aboutPage')->first();

        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();


        return view('visitors.pages.about',compact('data'));



    }



    public function getResultsPage(){

        $data['meta']=MetaData::select('*')->where('page_name','resultsPage')->first();

        $data['allresults']=Result::orderBy('year','desc')->Paginate(9);

//        return $data;


        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();


        return view('visitors.pages.results',compact('data'));

    }
    public function getResultsByYearPage($year){


        $data['meta']=MetaData::select('*')->where('page_name','resultsPage')->first();

        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();


        if($year==''){

            return redirect()->route('visitors.pages.results');
        }
        else if($year=='old'){

            $data['allresults']=Result::select('*')->where('year','=','Before 2014')->Paginate(9);

            return view('visitors.pages.results',compact('data'));

        }
        else if($year=='all'){

            return redirect()->route('visitors.pages.results');

        }
        else{

            $data['allresults']=Result::select('*')->where('year','=',$year)->Paginate(9);

            return view('visitors.pages.results',compact('data'));

        }

    }

    public function getWeInNewsPage(){

        $data['meta']=MetaData::select('*')->where('page_name','weInNewsPage')->first();


        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();


        $data['allNews']=News::simplePaginate(9);

//        return $data;

        return view('visitors.pages.weInNews',compact('data'));
    }

    public function getContactPage(){


        $data['meta']=MetaData::select('*')->where('page_name','contactUs')->first();

        $data['popup']=Popup::select('*')->where('status','=',1)->orderBy('created_at','desc')->first();



        return view('visitors.pages.contactUs',compact('data'));
    }


    public  function postContactPageData(){



        $fname=Input::get('fname');
        $lname=Input::get('lname');
        $mobile=Input::get('mobile');
        $email=Input::get('email');
        $messageBody=Input::get('messageBody');

        $to=$email;
        $name='rjsnh1522@gmail.com';


//        return Input::all();
        $data=[
            'fname'=>$fname,
            'lname'=>$lname,
            'mobile'=>$mobile,
            'email'=>$email,
            'messageBody'=>$messageBody
        ];

        $rule=[
            'fname'=>'required|regex:/^[(a-zA-Z\s)]+$/u',
            'mobile'=>'required|digits:10',
            'email'=>'required|email',
        ];




        $validator=Validator::make($data,$rule);



        if($validator->fails()){

//            return 'error';

            Session::flash('fail', 'Something went wrong Please try again !!');

            return redirect()->back()->withInput()->withErrors($validator);

        }
        else{



            $saveContact=new Contact();
            $saveContact->name=$fname." ".$lname;
            $saveContact->email=$email;
            $saveContact->mobile=$mobile;
            $saveContact->message=$messageBody;

            $saveContact->save();

            Session::flash('success', 'Thank You for contacting us!!');

            return Redirect::back();

//            ini_set('max_execution_time', 300);
//            $emailSend= Mail::send('visitors.sendMeAsMail',$data,
//                function($message) use($to,$name) {
//
//                    $message->to('rjsnh1522@gmail.com')->from($name)->subject('Contact Info Message');
//
//                });

            if($emailSend){

                Session::flash('success', 'Thank You for contacting us!!');

                return Redirect::back();


            }
            else {

                Session::flash('fail', 'Oops something went wrong!!');

                return Redirect::back();



            }





            return 'success';


        }



    }


    public function getAchievementsPage(){


        $data['meta']=MetaData::select('*')->where('page_name','achievementspage')->first();


        $data['achievements']=Achievement::simplePaginate(6);



//        return $data;

        return view('visitors.pages.achievements',compact('data'));




    }



}
