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

        return view('front/index', get_defined_vars());
    }

    public function viewAllPost()
    {
        $blog               =       HomePage::where('type', 4)->get();
        return view('front/viewAllPost', get_defined_vars());
    }
    public function showPost($id = '', $header = '')
    {
        $blog               =       HomePage::where(['type' => 4, 'id' => $id])->first();
        $blogs              =       HomePage::where('type', 4)->where('id','!=',$id)->take(4)->get();
        if (isset($blog->id)) {
            return view('front/showPost', get_defined_vars());
        } else {
            return redirect()->back();
        }
    }
}
