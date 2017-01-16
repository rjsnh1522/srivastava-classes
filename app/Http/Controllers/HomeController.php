<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use App\User;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['ch1'] = Charts::create('line', 'morris')
                // Use this if you want to use your own template
            ->title('My nice chart')
            ->labels(['First', 'Second', 'Third'])
            ->values([5,10,20])
            ->dimensions(1000,500)
            ->responsive(true);

        $data['ch2']=Charts::database(User::all(),'bar','material')
            ->elementLabel("Total")
            ->responsive(true)
            ->lastByMonth(6, true);


        return $data;

//        echo $chart;
        return view('welcome',compact('data'));
    }
}
