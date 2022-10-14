<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\takes;
class Auth extends Controller
{
    public function login(){
        return view('Login');

    }
    public function welcome(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('welcome',compact('data'));

    }
    public function courseplanner(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('courseplanner',compact('data'));

    }
    public function gpacalculator(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('gpacalculator',compact('data'));

    }
    public function registration(){
        return view('Registration');

    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|Unique:users',
            'password'=>'required|min:5|max:16',

        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->vtu = $request->vtu;
        $user->password =Hash::make( $request->password);
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered Successfully');

        }
        else{
            return back()->with('fail','Something Wrong');

        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:16'
        ]);
        $user=User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','password not match');
            }
        }else{
            return back()->with('fail','This email is not registered');

        }

    }
    public function dashboard(){
        $data=array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        $courses=array();
        $i = 0;
        $courses = takes::all()->where('vtu','=',$data->vtu);
        $i = count($courses);
        return view('welcome',compact('data'),[
        'courses' => $courses,
        'count' => $i,
        'datavtu' => $data->vtu,
        ]
    );
    }
    public function logout(){
        if (Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}