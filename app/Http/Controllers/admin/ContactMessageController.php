<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContactMessageController extends Controller
{
    public function getAllContactMessages(){


        $data['pageTitle']='Contact Messages';


        $data['allMessage']=Contact::orderBy('contact_id', 'DESC')->get();

        return view('admin.pages.contactMessage.contactMessageList',compact('data'));
    }


    public function getDeleteContactMessages($id){


        $deleteMessage=Contact::find($id);


        $deletedOrNot=$deleteMessage->delete();




        if ($deletedOrNot == '1') {

            Session::flash('success', 'Message deleted successfully!!');

            return redirect()->back();

        } else {

            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }


    }

}
