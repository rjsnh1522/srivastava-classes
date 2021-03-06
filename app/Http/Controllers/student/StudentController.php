<?php

namespace App\Http\Controllers\student;

use App\Student;
use App\StudentInfo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{

    public function getCompleteProfile()
    {

        $data['pageTitle'] = 'Profile';
        $data['formName'] = 'General Information';
        $sEmail = Session::get('email');
        $data['student'] = Student::where('email', $sEmail)->first();
//
//        $data['student']=DB::table('students')->leftjoin('students_info','students.email','=','students_info.email')
//                           ->where('students.email','=',$sEmail)->get();

        $data['studentInfo'] = StudentInfo::where('email', $sEmail)->first();

//        return $data['studentInfo'];
        return view('student.pages.profile.profile', compact('data'));

    }

    public function postCompleteProfile($email)
    {



        $name = Input::get('name');
        $dob = Input::get('dob');
        $gender=Input::get('gender');
        $mobile = Input::get('mobile');
        $fname = Input::get('FatherName');
        $mname = Input::get('MotherName');
        $gPhone = Input::get('GaurdianPhone');
        $scCol = Input::get('schoolOrCollege');
        $address = Input::get('address');
        $profiePic = Input::file('profiePic');
        $selectedClass=Input::get('selectedClass');


        $data = [
            'name' => $name,
            'dob' => $dob,
            'gender'=>$gender,
            'mobile' => $mobile,
            'FatherName' => $fname,
            'MotherName' => $mname,
            'GaurdianPhone' => $gPhone,
            'schoolOrCollege' => $scCol,
            'address' => $address,
            'profiePic' => $profiePic,
            'selectedClass'=>$selectedClass
        ];

        $rules = [
            'name' => 'required',
            'dob' => 'required',
            'gender'=>'required',
            'mobile' => 'required|digits:10',
            'FatherName' => 'required',
            'MotherName' => 'required',
            'GaurdianPhone' => 'required|digits:10',
            'schoolOrCollege' => 'required',
            'address' => 'required',
            'profiePic' => 'image',
            'selectedClass'=>'required'
        ];


        $validator = Validator::make($data, $rules);


        if ($validator->fails()) {
            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {
            $findStudent = Student::where('email', $email)->first();
            $imageNewName = $findStudent->image;

            if ($imageNewName != '') {
                $image = Input::file('profiePic');
                if ($image != '') {
                    $image->move(base_path() . '/resources/assets/images/student/', $imageNewName);
                    $thumb = Image::make(base_path() . '/resources/assets/images/student/' . $imageNewName)->resize('140', '140')->save();
                }

            } else {
                $image = Input::file('profiePic');
                if (isset($image)) {
                    $imageNewName = time() . '.' . $image->getClientOriginalExtension();
                    if (!file_exists('/resources/assets/images/student/')) {
                        mkdir('/resources/assets/images/student/', 0777, true);
                    }

                    $fileName = $image->move(base_path() . '/resources/assets/images/student/', $imageNewName);

                    $thumb = Image::make($fileName->getRealPath())->resize('140', '140')->save();
                }
            }


//            savaing data in student table

            $findStudent->name = $name;
            $findStudent->mobile = $mobile;
            $findStudent->image = $imageNewName;
            $findStudent->save();

//            save data to student_info table
            $studentInfo = StudentInfo::where('email', $email)->first();
            if (is_null($studentInfo)) {
                //no data available for that student create obj and save data
                $newStudInfo = StudentInfo::where('email', $email)->first();
                $newStudInfo->email = $email;
                $newStudInfo->dob = $dob;
                $newStudInfo->gender=$gender;
                $newStudInfo->f_name = $fname;
                $newStudInfo->m_name = $mname;
                $newStudInfo->g_contact = $gPhone;
                $newStudInfo->address = trim($address);
                $newStudInfo->school_college = $scCol;
                $newStudInfo->class=$selectedClass;
                $newStudInfo->save();
                Session::set('name', $name);
                Session::set('profilePic', $imageNewName);
                Session::flash('success', 'Thank you!! for submitting your data');
                return redirect()->back();
            } else {
                $studentInfo->email = $email;
                $studentInfo->dob = $dob;
                $studentInfo->gender=$gender;
                $studentInfo->f_name = $fname;
                $studentInfo->m_name = $mname;
                $studentInfo->g_contact = $gPhone;
                $studentInfo->address = trim($address);
                $studentInfo->school_college = $scCol;
                $studentInfo->class=$selectedClass;
                $studentInfo->save();
                Session::set('name', $name);
                Session::set('profilePic', $imageNewName);
                Session::flash('success', 'Thank you!! for submitting your data');
                return redirect()->back();

            }

            Session::flash('fail', 'Something went wrong ');
            return redirect()->back();


        }//validation else end


    } //function end



    public function getChangePassword(){

        $data['pageTitle']='Change password';
        $data['formName']='Change password';

        return view('student.pages.profile.change_password',compact('data'));
    }


    public function postChangedPassword(){

        $email = Session::get('email');


        $oPass = Input::get('oldPassword');
        $nPass = Input::get('password');
        $cfpassword = Input::get('password_confirmation');

        $data = [
            'email' => $email,
            'password' => $oPass
        ];


        if (Auth::attempt($data)) {
            $data2 = [
                'password' => $nPass,
                'password_confirmation' => $cfpassword
            ];
            $rule = [
                'password' => 'required|min:8',
                'password_confirmation' => 'required|same:password'
            ];

            $validator = Validator::make($data2, $rule);

            if ($validator->fails()) {
                Session::flash('fail', 'Repeat password must be same !!');
                return redirect()->back()->withErrors($validator);

            } else {

                $finduser=User::where('email',$email)->first();
                $finduser->password=Hash::make($nPass);
                $finduser->save();

                Session::flash('success', 'Password Changed successful!!');
                return redirect()->back();

            }
        } else {

            Session::flash('fail', 'Password does not match!!');
            return redirect()->back();

        }
    }


}
