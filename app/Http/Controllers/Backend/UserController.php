<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('backend.layouts.login.log');
    }

    public function loginPost(Request $request)
    {
        $credentials=$request->except('_token');
        // dd($request->all());
        // die();
        if(Auth::attempt($credentials))
        {
           if(auth()->user()->role=='admin')
           {
               return redirect()->route('dashboard');
           }else
           {
               Auth::logout();
               return redirect()->route('user.signup');
           }
        }
        return redirect()->back()->with('message','invalid user info.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }




    public function customerList()
    {
        $user=User::where('role','=','user')->get();
        // dd($user);
        return view('backend.layouts.customer.list',compact('user'));
    }

    public function userList()
    {

        $user=User::where('role','!=','customer')->get();
        return view('backend.layouts.user.list',compact('user'));
    }
}
