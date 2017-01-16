<?php

namespace App\Http\Controllers\admin;

use App\Contact;
use App\User;
use Carbon\Carbon;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{



    public function getAdminDashboard(Request $request){


            $data['totalStudent']=User::where('user_type',4)->count();
            $data['totalAdmin']=User::where('user_type',3)->count();

            $data['Notification']=User::where('user_type',4)
                ->where('status',0)->count();

            $data['contact']=Contact::all()->count();


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




        return view('admin.adminDashboard',compact('data'));
    }
}
