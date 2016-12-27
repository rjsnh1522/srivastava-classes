<?php

namespace App\Http\Controllers\admin;

use App\Achievement;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Redirect;

class AchievementsController extends Controller
{
    public function getAchievementsList()
    {

        $data['pageTitle']='Achievements List';
        $data['active']='Achievements';
        $achievements = Achievement::orderBy('title', 'asc')->Paginate(8);
        return view('admin.pages.achievements.achievements',compact('data'))->withAchievements($achievements);
    }

    public function getAddAchievement()
    {

        $data['pageTitle'] = 'Add New Achievement';
        $data['actionRoute'] = 'post.achievementsForm';
        $data['whatToDO'] = 'add';
        $achievements = Achievement::orderBy('updated_at', 'desc')->Paginate(8);

        return view('admin.pages.achievements.addAchievements', compact('data', 'achievements'));

    }


    public function postAchievements()
    {

        $title = Input::get('title');

        $dateOfachievement = Input::get('dateOfachievement');

        $dateOfachievement = str_replace(',', "", $dateOfachievement);
        $content = Input::get('content');

        $achie_slug = str_slug($title, '-');

        $dateOfachievement = strtotime($dateOfachievement);


        //converting to linux time stamp


        $data = [
            'title' => $title,
            'dateOfachievement' => $dateOfachievement,
            'content' => $content,
            'achie_slug' => $achie_slug
        ];

        $rules = [
            'title' => 'required|max:55',
            'dateOfachievement' => 'required',
            'content' => 'required',
            'achie_slug' => 'unique:achievements'
        ];
        $validator = Validator::make($data, $rules);


        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');

            return redirect()->back()->withInput()
                ->withErrors($validator);
        } else {


            $achievements = new Achievement();

            $achievements->title = $title;
            $achievements->achie_slug = $achie_slug;
            $achievements->content = $content;
            $achievements->ach_date = $dateOfachievement;

            $achievements->save();

          Session::flash('success', 'Achievements successfully saved');

            return Redirect::back();

        }

    }


    public function postDeleteAchievement($achie_slug)
    {

        $achievements = Achievement::where('achie_slug', $achie_slug);
        $deletedOrNot=$achievements->delete();

        if($deletedOrNot=='1'){
            Session::flash('success', 'Achievements deleted successfully!!');
            return redirect()->back();
        }
        else{

            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }



    }


    public function getEditAchievement($achie_slug)
    {

        $data['pageTitle']='Edit Achievement';
        $data['achievements'] = Achievement::where('achie_slug', $achie_slug)->first();
        $achievements = Achievement::orderBy('created_at', 'desc')->Paginate(8);


        return view('admin.pages.achievements.editAchievement', compact('data'))->withAchievements($achievements);

    }

    public function postEditedAchievement($ach_id)
    {

        $ach_id=Input::get('ach_id');
        $title = Input::get('title');
        $dateOfachievement = Input::get('dateOfachievement');
        $dateOfachievement = str_replace(',', "", $dateOfachievement);
        $content = Input::get('content');
        $achie_slug = str_slug($title, '-');
        $dateOfachievement = strtotime($dateOfachievement);


        //converting to linux time stamp


        $data = [
            'title' => $title,
            'dateOfachievement' => $dateOfachievement,
            'content' => $content,
            'achie_slug' => $achie_slug
        ];

        $rules = [
            'title' => 'required|max:55',
            'dateOfachievement' => 'required',
            'content' => 'required',
            'achie_slug' => 'unique:achievements'
        ];
        $validator = Validator::make($data, $rules);


        if ($validator->fails()) {

            Session::flash('fail', 'Opps Something went wrong please try again!!');


            return redirect()->back()->withInput($data)
                ->withErrors($validator);
        } else {
            $achievements=Achievement::find($ach_id);

            $achievements->title = $title;
            $achievements->achie_slug = $achie_slug;
            $achievements->content = $content;
            $achievements->ach_date = $dateOfachievement;

            $achievements->save();

            Session::flash('success', 'Achievement updated Successfully!!');

            return redirect()->route('get.achievements');


        }
    }

}
