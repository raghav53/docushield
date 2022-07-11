<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomePage;

class HomeController extends Controller
{
    public function home()
    {
        $mainBanner         =       HomePage::where('type', 1)->get();
        $everythingYouNeed  =       HomePage::where('type', 2)->get();
        $whatTheySay        =       HomePage::where('type', 3)->get();
        $blog               =       HomePage::where('type', 4)->get();
        $recentMedia        =       HomePage::where('type', 5)->get();
        $secMainBanner      =       HomePage::where('type', 6)->get();

        return view('front/index',get_defined_vars());
    }
}
