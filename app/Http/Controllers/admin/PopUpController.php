<?php

namespace App\Http\Controllers\admin;

use App\Popup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class PopUpController extends Controller
{
    public function getPopUpList(){


        $data['pageTitle']="Pop up setting";


        $data['popUp']=Popup::select('*')->get();

//
//        return $data;

        return view('admin.pages.globalSetting.listPopUp',compact('data'));
    }


    public function getAddPopUp(){
        $data['pageTitle']="Pop up setting";
        $data['formName']="Add PopUp Form";



        return view('admin.pages.globalSetting.addPopUp',compact('data'));

    }


    public function postPopUpData(){

        $data['pageTitle']="Pop u setting";
        $data['formName']="Add PopUp Form";
        $title = Input::get('title');
        $status=Input::get('status');
        $popUpImage = Input::file('newsImage');
        $popUpSlug = str_slug($title, '-');
        $data = [

            'title' => $title,
            'image' => $popUpImage,
            'popup_slug' => $popUpSlug

        ];

        $rule = [
            'title' => 'required|max:80',
            'image' => 'required|image',
            'popup_slug' => 'required|unique:popUp'

        ];



        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {
            $imageName = time() . '.' . $image = Input::file('newsImage')->getClientOriginalExtension();
            $imageUrl = Input::file('newsImage')->move(
                base_path() . '/resources/assets/images/popup/', $imageName
            );
            if($status=='on'){
                $status=1;
            }
            else{
                $status=0;
            }
            $savePopUpData = new Popup();
            $savePopUpData->name = $title;
            $savePopUpData->popup_slug=$popUpSlug;
            $savePopUpData->status=0;
            $savePopUpData->img_name = $imageName;
            $savePopUpData->save();

            Session::flash('success', 'Pop post successfully saved');

            return Redirect::back();

        }

    }


    public function getDeletePopUpData($id){

        $popUpData = Popup::where('popup_id', $id);

        $deleteImage=Popup::select('img_name')->where('popup_id', $id)->first();
        $deletedOrNot = $popUpData->delete();


        if ($deletedOrNot == '1') {



            File::delete('resources/assets/images/popup/'.$deleteImage['img_name']);
            Session::flash('success', 'PopUp deleted successfully!!');

            return redirect()->back();
        } else {


            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }

    }



    public function getEditPopUpData($id){



//        return $id;
        $data['pageTitle']="Popup setting";
        $data['formName']="Edit PopUp Form";

        $data['popUpDetail']=Popup::where('popup_id','=',$id)->first();

        return view('admin.pages.globalSetting.editPopUp',compact('data'));


    }


    public function postEditedPopUpData($id){


        $data['pageTitle']="Pop u setting";
        $data['formName']="Add PopUp Form";
        $title = Input::get('title');
        $status=Input::get('status');
        $popUpImage = Input::file('newsImage');
        $popUpSlug = str_slug($title, '-');
        $data = [

            'title' => $title,
            'image' => $popUpImage,
            'popup_slug' => $popUpSlug

        ];

        $rule = [
            'title' => 'required|max:80',
            'image' => 'image',
            'popup_slug' => 'required'

        ];



        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {

            $saveEditedPopUp=Popup::where('popup_id',$id)->first();

            $imgName=$saveEditedPopUp['img_name'];

            if( Input::file('newsImage')){
                $imageUrl = Input::file('newsImage')->move(
                    base_path() . '/resources/assets/images/popup/', $imgName
                );
            }

            if($status=='on'){
                $status=1;
            }
            else{
                $status=0;
            }

            $saveEditedPopUp->name = $title;
            $saveEditedPopUp->popup_slug=$popUpSlug;
            $saveEditedPopUp->status=0;
            $saveEditedPopUp->img_name = $imgName;
            $saveEditedPopUp->save();

            Session::flash('success', 'Pop post Edited successfully');

            return redirect()->route('get.popUp');

        }


    }




    public function enableDisablePopUp($id){


        $enableOrDisable=Popup::where('popup_id','=',$id)->first();


        if($enableOrDisable->status==1){
            $enableOrDisable->status='0';
            $enableOrDisable->save();
            Session::flash('success', 'popup status chnaged!!');
            return redirect()->back();


        }
        else{
            //select all the data where status is 1
            $popUpstatus=Popup::where('status','=',1)->where('popup_id','!=',$id)->get();
            if(count($popUpstatus)>=1){

                Session::flash('fail', 'Only One popup can be enabled !!');
                return redirect()->back();
            }
            else{

                $enableOrDisable->status='1';
                $enableOrDisable->save();

                Session::flash('success', 'popup status chnaged!!');
                return redirect()->back();
            }

        }

        Session::flash('fail', 'Something went wrong!!');
        return redirect()->back();

    }


}
