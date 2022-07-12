<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Role;
use App\Models\User;
use App\Models\HomePage;

use Hash;
use Auth;
use Validator;

class AdminMain extends Controller
{

    public function adminAccount()
    {
        return view('admin/account');
    }


   public function saveAdminAccountDetails(Request $request)
   {
        if($request->hasFile('image')){
            $rules = array(
                'image'        => 'mimes:jpeg,jpg,png,PNG,JPG,gif|required|max:10000'
     
             );
             $validator = Validator::make($request->all(), $rules);
             if ($validator->fails()) {
                 $success['message']    =  "field is required";
           
                 return Redirect::back()->withErrors($validator);
                
             } else{
                 $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
        
                    $user              =  User::find(Auth::User()->id);
                    $user->image       =  $imageName;
                    $user->save();
        
         
             } 
        }

        if($request->password!=''){
            $user                 =  User::find(Auth::User()->id);
            $user->password       =  Hash::make($request->password);
            $user->save();
        }
        if($request->name!=''){
            $user                 =  User::find(Auth::User()->id);
            $user->name           = $request->name;
            $user->save();
        }
        if($request->email!=''){
            $user                 =  User::find(Auth::User()->id);
            $user->email       =  $request->email;
            $user->save();
        }
        return Redirect::back();
   }








    public function mainBanner()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 1)->get();
        return view('admin/mainBanner', get_defined_vars());
    }

    public function everythingYouNeed()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 2)->get();
        return view('admin/everythingYouNeed', get_defined_vars());
    }
    public function whatTheySay()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 3)->get();
        return view('admin/whatTheySay', get_defined_vars());
    }
    public function blog()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 4)->get();
        return view('admin/blog', get_defined_vars());
    }
    public function recentMedia()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 5)->get();
        return view('admin/recentMedia', get_defined_vars());
    }
    public function secMainBanner()
    {
        $count      =   0;
        $data       =   HomePage::where('type', 6)->get();
        return view('admin/secMainBanner', get_defined_vars());
    }

    public function saveMainPageData(Request $request)
    {
        $imageName = NULL;
        //    echo"<pre>";print_r($_POST);die();
        $rules = array(
            'header'         => 'required',
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $success['message']    =  "field is required";
            // prx($validator->errors());
            return Redirect::back()->withErrors($validator);
            // return Redirect::back()->withErrors(['msg' => $validator->errors()]);
        } else {

            if ($request->home_page > 0) {
                $HomePage              =  HomePage::find($request->home_page);
                $msg                   =  'Successfully Updated';
                $imageName             =   $HomePage->image;
            } else {
                $HomePage              = new HomePage();
                $msg                   =  'Successfully Created';
            }

            $HomePage->type           = $request->type;
            $HomePage->header         = $request->header;
            $HomePage->text           = $request->text;
            $HomePage->link           = $request->link;
            $HomePage->name           = $request->name;
            $HomePage->position       = $request->position;
            $HomePage->data_type      = $request->data_type;
            $HomePage->keywords       = str_replace(' ',',',$request->keywords);
            $HomePage->description    = $request->description;
            $HomePage->short_desc     = $request->short_desc;
            $HomePage->fb_link         = $request->fb_link;
            $HomePage->twitter_link     = $request->twitter_link;
            $HomePage->youtube_link     = $request->youtube_link;
            if ($request->hasFile('image')) {
                $rules = array(
                    'image'        => 'mimes:jpeg,jpg,png,PNG,JPG,gif|required|max:10000'

                );
                $validator = Validator::make($request->all(), $rules);
                if ($validator->fails()) {
                    $success['message']    =  "field is required";

                    return Redirect::back()->withErrors($validator);
                } else {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images'), $imageName);
                }
            }
            $HomePage->image         = $imageName;
            $HomePage->save();

            return Redirect()->back()->with(['msg' => $msg, 'status' => 'success']);
        }
    }

    public function DeleteMainPageData($id = '')
    {
        $home = HomePage::where('id', $id)->first();
        $status  = 'error';
        if (isset($home->id)) {
            $home->delete();
            $msg    = 'Successfully deleted';
            $status =   'success';
        }
        return Redirect()->back()->with(['msg' => $msg, 'status' => $status]);
    }
}
