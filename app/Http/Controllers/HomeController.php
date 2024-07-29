<?php

namespace App\Http\Controllers;

use App\Models\NonOfficer;
use App\Models\Officer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $officerCount = Officer::count();
        $non = NonOfficer::count();
        return view('index',['officerCount'=>$officerCount,'non'=>$non]);
    }
}
