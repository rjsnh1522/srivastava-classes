<?php

namespace App\Http\Controllers\admin;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function getAdminDashboard(Request $request){

            $data['totalStudent']=User::where('user_type',4)->count();
            $data['totalAdmin']=User::where('user_type',3)->count();

//           $data['registrationMonth']=User::where('user_type',4)->get()
//               ->groupBy(function($val) {
//                   return Carbon::parse($val->created_at)->format('Y m');
//               });
//             $a=(array)$data['registrationMonth'];
//
//        $data['registrationMonth']=User::where('user_type',4)
//                       ->where('created_at','>=',Carbon::now()->subMonth())
//                       ->groupBy('created_at')
//                       ->get();
//
//        return $data['registrationMonth'];

//               return  $a['item'];
        return view('admin.adminDashboard',compact('data'));
    }
}
