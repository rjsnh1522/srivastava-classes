<?php

namespace App\Http\Controllers\admin;

use App\Result;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
//use Intervention\Image\File;
use Illuminate\Support\Facades\File;


class ResultsController extends Controller
{
    public function getAllResults()
    {


        $data['pageTitle'] = 'Results So Far';

        $data['allResults'] = Result::select('*')->get();


        return view('admin.pages.results.resultsList', compact('data'));
    }


    public function getAddResult()
    {


        $data['pageTitle'] = 'Add New Result';
        $data['formName'] = 'Add Result Form';

        return view('admin.pages.results.addResults', compact('data'));

    }


    public function postAddResult()
    {

        $studentName = Input::get('studentName');

        $examName = Input::get('examName');

        $rank = Input::get('rank');
        $year = Input::get('year');
        $stream = Input::get('stream');
        $studentImage = Input::file('studentImage');
        $student_name_Slug = str_slug($studentName, '-');


        $data = [

            'studentName' => $studentName,
            'examName' => $examName,
            'rank' => $rank,
            'year' => $year,
            'stream' => $stream,
            'image' => $studentImage,
            'student_name_slug' => $student_name_Slug

        ];

        $rule = [
            'studentName' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
            'examName' => 'required|max:80',
            'image' => 'required|image',
            'year' => 'required',
            'stream' => 'required',
            'student_name_slug' => 'required'

        ];


//        return Input::all();

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);

        } else {


            $image = Input::file('studentImage');

            $imageName = time() . '.' . $image->getClientOriginalExtension();


            if (!file_exists('/resources/assets/images/results/')) {
                mkdir('/resources/assets/images/results/', 0777, true);
            }

            $image->move(base_path() . '/resources/assets/images/results/', $imageName);
            $thumb = Image::make(base_path() . '/resources/assets/images/results/' . $imageName)->resize(320, 320)->save();
            $saveResultData = new Result();

            $saveResultData->student_name = $studentName;
            $saveResultData->student_name_slug = $student_name_Slug;
            $saveResultData->exam_name = $examName;
            $saveResultData->rank = $rank;
            $saveResultData->year = $year;
            $saveResultData->stream = $stream;
            $saveResultData->img_name = $imageName;
            $saveResultData->img_url = '/resources/assets/images/results/';

            $saveResultData->save();


            Session::flash('success', 'Result Added successfully');

            return Redirect::back();

        }


    }


    public function getDeleteResult($id)
    {

        $resultData = Result::where('result_id', $id);

        $studentImage = Result::select('img_name')->where('result_id', $id)->first();


//        print_r($deleteImage['news_image_name']);

        $deletedOrNot = $resultData->delete();


        if ($deletedOrNot == '1') {


            File::delete('resources/assets/images/results/' . $studentImage['img_name']);
            Session::flash('success', 'Result deleted successfully!!');

            return redirect()->back();
        } else {


            Session::flash('fail', 'Oops something went wrong!!');
            return redirect()->back();
        }
    }


    public function getEditResult($id){
        $data['pageTitle'] = 'Edit Result';
        $data['formName'] = 'Edit Result Form';

        $data['forResultEdit']=Result::where('result_id',$id)->first();


//        return $data;


        return view('admin.pages.results.editResult', compact('data'));
    }

    public function postEditedResult($id){


        $studentName = Input::get('studentName');

        $examName = Input::get('examName');

        $rank = Input::get('rank');
        $year = Input::get('year');
        $stream = Input::get('stream');

        $studentImage = Input::file('studentImage');

        $student_name_Slug = str_slug($studentName, '-');


        $data = [

            'studentName' => $studentName,
            'examName' => $examName,
            'rank' => $rank,
            'year' => $year,
            'stream' => $stream,
            'image' => $studentImage,
            'student_name_slug' => $student_name_Slug

        ];


//        return $data;

        $rule = [
            'studentName' => 'required|regex:/^[(a-zA-Z\s)]+$/u',
            'examName' => 'required|max:80',
            'year' => 'required',
            'stream' => 'required',
            'student_name_slug' => 'required'

        ];


        $validator = Validator::make($data, $rule);

        if($validator->fails()){

            Session::flash('fail', 'Something went wrong Please try again !!');
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else{

            $saveEditedResult=Result::where('result_id',$id)->first();

            $studentImageNewName=$saveEditedResult['img_name'];


            if(Input::file('studentImage')){

                $image = Input::file('studentImage');

                $image->move(base_path() . '/resources/assets/images/results/', $studentImageNewName);


                $thumb = Image::make(base_path() . '/resources/assets/images/results/' . $studentImageNewName)->resize(320, 320)->save();


            }
            $saveEditedResult->student_name=$studentName;
            $saveEditedResult->student_name_slug=str_slug($studentName,'-');
            $saveEditedResult->exam_name=$examName;
            $saveEditedResult->rank=$rank;
            $saveEditedResult->year=$year;
            $saveEditedResult->stream=$stream;
            $saveEditedResult->img_name=$studentImageNewName;
            $saveEditedResult->img_url='/resources/assets/images/results/';

            $saveEditedResult->save();


            Session::flash('success', 'News Edited  successfully');


            return redirect()->route('get.all.results');


        }

    }

}
