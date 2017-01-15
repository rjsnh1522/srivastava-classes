<?php

namespace App\Http\Controllers;

use App\Http\Requests;

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
        $chart = Charts::create('line', 'highcharts')
                // Use this if you want to use your own template
            ->title('My nice chart')
            ->labels(['First', 'Second', 'Third'])
            ->values([5,10,20])
            ->dimensions(1000,500)
            ->responsive(true);

//        echo $chart;
        return view('welcome', ['chart' => $chart]);
    }
}
