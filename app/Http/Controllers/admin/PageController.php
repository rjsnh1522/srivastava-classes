<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function getAdminDashboard(Request $request){



        return view('admin.adminDashboard');
    }
}
