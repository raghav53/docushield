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
use Mail;

class AdminDashboard extends Controller
{
    // public function adminlog()
    // {
    //     $user = User::find(1);
    //     Auth::login($user, true);
    // }
    public function make_admin()
    {
        $user               =     new User();
        $user->name         =    'Admin';
        // $user->last_name    =    'quad';
        $user->email        =    'admin@gmail.com';
        // $user->is_verify    =     1;
        // $user->country      =    'India';
        // $user->dob          =    '1998/05/16';
        $user->password     =     Hash::make('admin@123');
        $user->save();
        $admin = Role::where('slug', 'admin')->first();
        $user->roles()->attach($admin);
    }
    public function make_user()
    {
        $creator = ['acreator', 'bcreator', 'ccreator', 'dcreator'];
        $questor = ['aquestor', 'bquestor', 'cquestor', 'dquestor'];
        foreach ($creator as $list) {
            $user               =     new User();
            $user->name         =    $list;
            $user->last_name    =    'quad';
            $user->email        =    '' . $list . '@gmail.com';
            $user->is_verify    =     1;
            $user->country      =    'India';
            $user->dob          =    '1998/05/16';
            $user->password     =     Hash::make('user@123');
            $user->save();
            $admin = Role::where('slug', 'creator')->first();
            $user->roles()->attach($admin);
        }
        foreach ($questor as $list) {
            $user               =     new User();
            $user->name         =    $list;
            $user->last_name    =    'quad';
            $user->email        =    '' . $list . '@gmail.com';
            $user->is_verify    =     1;
            $user->country      =    'India';
            $user->dob          =    '1998/05/16';
            $user->password     =     Hash::make('user@123');
            $user->save();
            $admin = Role::where('slug', 'questor')->first();
            $user->roles()->attach($admin);
        }
    }
    public function admin_login()
    {
        if (Auth::User() && Auth::User()->hasRole('admin')) {
            return redirect('adminDashboard');
        } else {
            return view('admin/login');
        }
    }
    public function post_admin(Request $request)
    {
        // prx($_POST);
        $email          = $request->email;
        $password       = $request->password;
        $credentials    = array('email' => $email, 'password' => $password);

        if (Auth::attempt($credentials, false)) {
            if(Auth::User()->hasRole('admin')){
                return Redirect('adminDashboard');
              }else{
                Auth::logout();
                $success['message']    =  "Incorrect username/password combination";
                return Redirect::back()->withErrors(['msg' => $success['message']]);
              }
        } else {
            $success['message']    =  "Incorrect username/password combination";
            return Redirect::back()->withErrors(['msg' => $success['message']]);
        }
    }

    public function sendResetPasswordLinkAdmin(Request $request)
    {
        $email  = $request->email;

        $user  = User::where('email', $email)->first();
        // prx($user->name);
        if (isset($user->id)) {
            $token  = generateRandomString();
            $user->remember_token = $token;
            $user->save();

            $data  = ['token' => $token, 'name' => $user->name ];
            $user['to'] = $email;
            Mail::send('forgot_password', $data, function ($messages) use ($user) {
                $messages->to($user['to']);
                $messages->subject('Reset password');
            });
            return response()->json(['status' => 200, 'msg' => 'Reset password link has been sent to your Email ID']);
        } else {
            return response()->json(['status' => 400, 'msg' => 'Email ID not exist']);
        }
    }

    public function dashboard()
    {
    
     // prx(get_defined_vars());


        return view('admin/dashboard', get_defined_vars());
    }

  
}
