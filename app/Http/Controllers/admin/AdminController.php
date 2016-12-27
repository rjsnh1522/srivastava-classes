<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


class AdminController extends Controller
{
    public function getAllAdminList(){


        $data['pageTitle'] = 'All Admins';
        $data['active'] = 'admin';


//        $data['allAdmins'] = Admin::leftjoin('user_types', 'admins.user_type', '=', 'user_types.value')
//                    ->select('user_types.*','admins.*')->get();

        $data['allAdmins'] = Admin::leftjoin('users', 'admins.email', '=', 'users.email')
                                ->where('users.user_type','!=',4)->get();



//        return $data;



        return view('admin.pages.allAdmin.adminList',compact('data'));
    }

    public function getAddNewAdmin(){
        $data['pageTitle'] = 'All Admins';
        $data['active'] = 'admin';

        $data['formName'] = 'Add New Admin Form';
        $data['allAdmins'] = Admin::orderBy('updated_at', 'desc')->paginate(8);

        return view('admin.pages.allAdmin.addNewAdmin', compact('data'));

    }

    public function postAddNewAdmin(){

        $fullName=Input::get('fullname');
        $email=Input::get('email');
        $password=Input::get('password');
        $confPassword=Input::get('password_confirmation');
        $status=Input::get('status');



        $data=[
            'email'=>$email,
            'fullName'=>$fullName,
            'password'=>$password,
            'password_confirmation'=>$confPassword
        ];

        $rules=[

            'email'=>'required|email|unique:users|unique:admins',
            'fullName'=>'required',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password'

        ];


        $validator=Validator::make($data,$rules);

        if($validator->fails()){

            Session::flash('fail', 'Oops Something went wrong!!');
            return redirect()->back()->withErrors($validator);

        }
        else{


            if($status=='on'){
                $status=1;
            }
            else{
                $status=0;
            }
            $addAdmin=new Admin();
            $addAdmin->email=$email;
            $addAdmin->name=$fullName;
            $addAdmin->status=$status;
//            $addAdmin->image='dummyuser.png';

            $addAdmin->save();

            $addAdminUsers=new User();

            $addAdminUsers->email=$email;
            $addAdminUsers->password=Hash::make($password);
            $addAdminUsers->user_type='3';
            $addAdminUsers->status=$status;
            $addAdminUsers->save();

            Session::flash('success', 'New Admin added Successful!!');

            return redirect()->route('get.admin.list');


        }


    }


    public function postEnableDisable($id){

        $userType=Session::get('user_type');
        $userEmail=Session::get('email');

        $dataAdmin=Admin::where('admin_id',$id)->first();

        $emailofUser=$dataAdmin->email;

        $findInUser=User::where('email','=',$emailofUser)->first();


        if($findInUser->user_type==1){

            Session::flash('fail', 'You cant disable Boss of the web!!');

            return redirect()->back();
        }
        else{

            if($dataAdmin->status==0){

                $dataAdmin->status=1;
                $dataAdmin->save();
                $userTable=User::where('email','=',$dataAdmin->email)->first();
                $userTable->status=1;

                $userTable->save();
                Session::flash('success', 'Admin Enabled Successfully!!');
                return redirect()->back();



            }
            else{

                $dataAdmin->status=0;
                $dataAdmin->save();
                $userTable=User::where('email','=',$dataAdmin->email)->first();
                $userTable->status=0;

                $userTable->save();

                Session::flash('success', 'Admin Disabled Successfully!!');
                return redirect()->back();


            }

        }

        Session::flash('fail', 'Something went wrong!!');
        return redirect()->back();

    }






    public function postDeleteAdmin($id){


       $adminTable=Admin::where('admin_id',$id)->first();

       $email=$adminTable->email;

       $usrTable=User::where('email',$email)->first();

        if($usrTable->user_type==1){
            Session::flash('fail', 'You cant Delete Boss of the Web!!');
            return redirect()->back();

        }
        elseif($usrTable->user_type==2){


            Session::flash('fail', 'You cant Delete Super Admin!!');
            return redirect()->back();

        }
        else{

            $adminTable->delete();
            $usrTable->delete();

            Session::flash('success', 'Admin Deleted Successfully!!');
            return redirect()->back();

        }

        Session::flash('fail', 'Something went wrong!!');
        return redirect()->back();

    }



    public  function getCompleteYourProfile(){


        $data['pageTitle'] = 'Your Profile';
        $data['active'] = 'profile';
        $data['formName'] = 'Complete Your Profile';

        $getEmail=Session::get('email');
        $data['adminTable']=Admin::where('email',$getEmail)->first();
        $data['userTable']=User::where('email',$getEmail)->first();


//        return $data;


        return view('admin.pages.profile.profile', compact('data'));


    }

    public function postCompleteYourProfile($email)
    {


        $name      =Input::get('name');
        $mobile    =Input::get('mobile');
        $dob       =Input::get('dob');
        $password  =Input::get('password');
        $cpassword =Input::get('password_confirmation');
        $address   =Input::get('address');
        $newsImagename =Input::get('newsImage');

        $profilePic =Input::file('newsImage');





        $data = [
            'mobile' => $mobile,
            'password' => $password,
            'password_confirmation' => $cpassword,
            'image'=> $profilePic
        ];

        $rules = [
            'mobile' => 'required|digits:10',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'image'=>'image'
        ];


        $validator = Validator::make($data, $rules);


        if($validator->fails()){
            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        }
        else{

            $findAdmin=Admin::where('email',$email)->first();

           $imageNewName=$findAdmin->image;

            if($imageNewName!=''){
                $image = Input::file('newsImage');
                $image->move(base_path() . '/resources/assets/images/admin/', $imageNewName);
                $thumb = Image::make(base_path() . '/resources/assets/images/admin/' . $imageNewName)->resize(140, 140)->save();
            }else{

              $image = Input::file('newsImage');
                if(isset($image)){


                  $imageNewName = time() . '.' . $image->getClientOriginalExtension();
                    if (!file_exists('/resources/assets/images/admin/')) {
                        mkdir('/resources/assets/images/admin/', 0777, true);
                    }

                    $fileName=$image->move(base_path() . '/resources/assets/images/admin/', $imageNewName);

                    $thumb = Image::make($fileName->getRealPath())->resize(140, 140)->save();
                }

            }
            $findAdmin->name=$name;
            $findAdmin->address=$address;
            $findAdmin->mobile=$mobile;
            $findAdmin->dob=$dob;
            $findAdmin->image=$imageNewName;

            $findAdmin->save();

            $findInUser=User::where('email',$email)->first();

            $findInUser->password=Hash::make($password);
            $findInUser->mobile=$mobile;

            $findInUser->save();

            Session::set('name',$name);
            Session::set('profilePic',$imageNewName);

            Session::flash('success', 'Profile Data Saved!!');
            return redirect()->back();

        }

        Session::flash('fail', 'Something went wrong Please try again !!');
        return redirect()->back();
    }





}
