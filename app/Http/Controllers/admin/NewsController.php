<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
//use Intervention\Image\Facades\Image;
use App\News;
use Image;

class NewsController extends Controller
{
    public function getNewsList()
    {

        $data['pageTitle'] = 'News List';
        $data['active'] = 'News';
        $data['allNews'] = News::orderBy('updated_at', 'desc')->paginate(8);

        return view('admin.pages.news.newsList', compact('data'));
    }

    public function getAddNews()
    {

        $data['pageTitle'] = 'Add New News';
        $data['active'] = 'News';
        $data['formName'] = 'Add News Form';
        return view('admin.pages.news.addNews', compact('data'));

    }


    public function postAddNews()
    {

        $title = Input::get('title');

        $paperName = Input::get('paperName');

        $dateFeatured = Input::get('dateFeatured');
        $dateFeatured = str_replace(',', "", $dateFeatured);
        $dateFeatured = strtotime($dateFeatured);


        $newsImage = Input::file('newsImage');

        $content = Input::get('content');
        $newsSlug = str_slug($title, '-');


        $data = [

            'title' => $title,
            'paperName' => $paperName,
            'date' => $dateFeatured,
            'image' => $newsImage,
            'content' => $content,
            'news_slug' => $newsSlug

        ];

        $rule = [
            'title' => 'required|max:80',
            'paperName' => 'required|max:80',
            'date' => 'required',
            'image' => 'required|image',
            'content' => 'required',
            'news_slug' => 'required|unique:news'

        ];


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {
            $imageName = time() . '.' . $image = Input::file('newsImage')->getClientOriginalExtension();
            $imageUrl = Input::file('newsImage')->move(
                base_path() . '/resources/assets/images/news/', $imageName
            );


            $saveNewsData = new News();

            $saveNewsData->news_title = $title;
            $saveNewsData->news_slug = $newsSlug;
            $saveNewsData->which_paper = $paperName;
            $saveNewsData->news_date = $dateFeatured;
            $saveNewsData->news_image_name = $imageName;
            $saveNewsData->news_image_url = '/resources/assets/images/news/';
            $saveNewsData->news_content = $content;
            $saveNewsData->save();

            Session::flash('success', 'News post successfully saved');

            return Redirect::back();

        }
    }


    public function postDeleteNews($news_slug)
    {


//        return 1;

        $newsData = News::where('news_slug', $news_slug);

        $deleteImage=News::select('news_image_name')->where('news_slug', $news_slug)->first();



//        print_r($deleteImage['news_image_name']);

        $deletedOrNot = $newsData->delete();


        if ($deletedOrNot == '1') {



            File::delete('resources/assets/images/news/'.$deleteImage['news_image_name']);
            Session::flash('success', 'News deleted successfully!!');

            return redirect()->back();
        } else {


            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }


    }


    public function getEditNews($news_slug)
    {

        $data['pageTitle'] = 'Edit News';
        $data['formName'] = 'Edit News Form';
        $data['allNews'] = News::where('news_slug', $news_slug)->first();

        return view('admin.pages.news.editnews', compact('data'));


    }

    public function postEditedNews($news_slug)
    {
        $title = Input::get('title');
        $paperName = Input::get('paperName');
        $dateFeatured = Input::get('dateFeatured');
        $dateFeatured = str_replace(',', "", $dateFeatured);
        $dateFeatured = strtotime($dateFeatured);
        $newsImage = Input::file('newsImage');

        $content = Input::get('content');
        $newsSlug = str_slug($title, '-');




        $data = [
            'title' => $title,
            'paperName' => $paperName,
            'date' => $dateFeatured,
            'image' => $newsImage,
            'content' => $content,
            'news_slug' => $newsSlug
        ];


        $rule = [
            'title' => 'required|max:80',
            'paperName' => 'required|max:80',
            'date' => 'required',

            'content' => 'required',
            'news_slug' => 'required'

        ];


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {


            $saveNewsData=News::where('news_slug',$news_slug)->first();

            $imageNameNew = $saveNewsData['news_image_name'];

           if( Input::file('newsImage')){
               $imageUrl = Input::file('newsImage')->move(
                   base_path() . '/resources/assets/images/news/', $imageNameNew
               );
           }

            $saveNewsData->news_title = $title;
            $saveNewsData->news_slug = $newsSlug;
            $saveNewsData->which_paper = $paperName;
            $saveNewsData->news_date = $dateFeatured;
            $saveNewsData->news_image_name = $imageNameNew;
            $saveNewsData->news_image_url = '/resources/assets/images/news/';
            $saveNewsData->news_content = $content;
            $saveNewsData->save();

            Session::flash('success', 'News Edited  successfully');

            return redirect()->route('get.news.list');


        }


    }
}
