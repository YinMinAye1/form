<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class CustomAuthController extends Controller
{
    public function login()
    {
        return view ("auth.login");
    }
    public function registration()
    {
        return view("auth.registration");
    }
    public function registerUser(Request $request)
    {
       $request->validate(
       [
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12',

       ]);
       $user = new User();
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password = Hash::make($request->password);
       $result= $user->save();
       if($result)
       {
          return back()->with('success','You have Registered successfully');
       }

       else{
        return back()->with('fail','Something Wrong');
       }


    }
    public function loginUser(Request $request)
    {
       $request->validate(
       [

        'email'=>'required|email',
        'password'=>'required|min:5|max:12',

       ]);
       $user = User::where('email','=',$request->email)->first();
       if($user)
       {
        if(Hash::check($request->password,$user->password)) {
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');
        }else{
            return back()->with('fail','Password is not match');
        }
        }else{
        return back()->with('fail','This email is not register!');
        }
    }


    public function dashboard()
    {
        $data= array();
        if(Session::has('loginId')){
             $data = User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
