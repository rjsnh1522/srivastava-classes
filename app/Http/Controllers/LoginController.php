<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Student;

use Illuminate\Http\Request;

//use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class LoginController extends Controller
{


    public function postLoginForm(){

        $email=Input::get('email');
        $password=Input::get('password');

        $data=[
            'email'=>$email,
            'password'=>$password
        ];
        $rules=[
            'email'=>'required',
            'password'=>'required'
        ];

        $validator=Validator::make($data,$rules);

        if($validator->fails()){
            Session::flash('fail', 'Oops Something went wrong!!');
            return redirect()->back()->withErrors($validator);
        }
        else{
            if(Auth::attempt($data)){

                $checkStatus=User::select('*')->where('email',$email)->first();
                Session::put('email',$checkStatus->email);
                Session::put('user_type',$checkStatus->user_type);

                if(Session::get('user_type')!=4){
                   $dataAdmin=Admin::where('email',$checkStatus->email)->first();
                   Session::put('profilePic',$dataAdmin->image);
                   Session::put('name',$dataAdmin->name);
                }
                else{
                    $dataStudent=Student::where('email',$checkStatus->email)->first();
                    if($dataStudent==''){
                        Session::flash('wait', 'Registration is not approved!!');
                        return redirect()->back();
                    }else{
                        Session::put('profilePic',$dataStudent->image);
                        Session::put('name',$dataStudent->name);
                    }
                }

                if($checkStatus['user_type']=='4'){
                    if($checkStatus['status']=='0' || $checkStatus['status']=='2' ){
                        Session::flash('wait', 'Registration is not approved!!');
                        return redirect()->back();
                    }
                    else{
                        return redirect()->route('get.student.dashBoard');
                    }
                }
                else if($checkStatus['user_type']=='1'){
                    if(Auth::check()){
                        return redirect()->route('get.admin.dashBoard');
                    }
                    else{
                        Session::flash('fail', 'Login details not available!!');
                        return redirect('/login');
                    }

                }
                else if($checkStatus['user_type']=='2'){

                    if($checkStatus['status']=='0'){
                        Session::flash('fail', 'Your not authorized to Login!!');

                        return redirect('/login');

                    }
                        else{
                            return Redirect::route('get.admin.dashBoard');

                        }
                }
                else if($checkStatus['user_type']=='3'){
                    if($checkStatus['status']=='0') {
                        Session::flash('fail', 'Your not authorized to Login!!');

                        return redirect('/login');

                    }
                    else{
                        return Redirect::route('get.admin.dashBoard');
                    }
                }
                else{
                    Session::flash('fail', 'Oops Something went wrong!!');
                    return redirect()->back();
                }

            }
            else{
                Session::flash('fail', 'Login details not matched!!');
                return redirect()->back();
            }

        }
        Session::flash('fail', 'Nothing worked Contact Developer!!');
        return redirect()->back();

    }

    public  function postLogoutMe(){

        Auth::logout();
        Session::flush('email');
        Session::flush('user_type');
        Session::flush('profilePic');
        Session::flush('name');


//        return redirect('/login');

        return Redirect::route('get.login.page');


    }


    public function getRegisterPage()
    {

        return view('register');
    }

    public function postRegisterForm()
    {

        $email = Input::get('email');
        $mobile = Input::get('mobile');
        $password = Input::get('password');
        $cnfPassword = Input::get('password_confirmation');


        $data = [
            'email' => $email,
            'mobile' => $mobile,
            'password' => $password,
            'password_confirmation' => $cnfPassword
        ];

        $rules = [

            'email' => 'required|email|unique:users',
            'mobile' => 'required|digits:10',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'

        ];


        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {

            Session::flash('fail', 'Oops Something went wrong!!');
            return redirect()->back()->withErrors($validator);

        } else {

            $userRegister = new User();

            $userRegister->email = $email;
            $userRegister->mobile = $mobile;
            $userRegister->password = Hash::make($password);
            $userRegister->user_type = '4';
            $userRegister->status = '0';


            $userRegister->save();


            Session::flash('success', 'Registration Successful!!');

            return redirect()->back();


        }


    }


    public function getForgotPasswordForm()
    {


        return view('forgotPassword');
    }


    public function getLoginPage()
    {

        return view('login');

    }




}
