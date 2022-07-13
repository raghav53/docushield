<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HomePage;

class HomeController extends Controller
{
    public function home()
    {
        $mainBanner         =       HomePage::where('type', 1)->orderBy('id','desc')->get();
        $everythingYouNeed  =       HomePage::where('type', 2)->orderBy('id','desc')->get();
        $whatTheySay        =       HomePage::where('type', 3)->orderBy('id','desc')->get();
        $blog               =       HomePage::where('type', 4)->orderBy('id','desc')->get();
        $recentMedia        =       HomePage::where('type', 5)->orderBy('id','desc')->get();
        $secMainBanner      =       HomePage::where('type', 6)->orderBy('id','desc')->get();

        return view('front/index', get_defined_vars());
    }

    public function viewAllPost()
    {
        $blog               =       HomePage::where('type', 4)->orderBy('id','desc')->get();
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
