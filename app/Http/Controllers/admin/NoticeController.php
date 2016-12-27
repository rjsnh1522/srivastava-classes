<?php

namespace App\Http\Controllers\admin;

use App\Admin;
use App\Notice;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class NoticeController extends Controller
{


    public function allNotices(){

        $data['pageTitle']='All Notices';
        $data['notices']=Notice::paginate(8);
        return view('admin.pages.notice.listNotice',compact('data'));


    }


    public function getAddNotice(){

        $data['pageTitle']='Add Notice';
        $data['addForm']='Add Notice';

        return view('admin.pages.notice.addNotice',compact('data'));
    }
    public function postAddNoticeForm(){



        $title=Input::get('title');
        $content=Input::get('content');
        $titleSlug = str_slug($title, '-');

        $data = [
            'title' => $title,
            'content' => $content,
            'title_slug'=>$titleSlug,

        ];

        $rules = [
            'title' => 'required',
            'content' => 'required',
            'title_slug'=>'required|unique:notices'
        ];
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        }
        else{

            $getAdmin=Admin::where('email',Session::get('email'))->first();


            $dataNotice=new Notice();
            $dataNotice->title=$title;
            $dataNotice->content=$content;
            $dataNotice->title_slug=$titleSlug;
            $dataNotice->added_by=$getAdmin->name;

            $dataNotice->save();

            Session::flash('success', 'Notice added Successfully !!');
            return redirect()->back();


        }
        Session::flash('fail', 'Something went wrong Please try again !!');
        return redirect()->back();

    }


}
