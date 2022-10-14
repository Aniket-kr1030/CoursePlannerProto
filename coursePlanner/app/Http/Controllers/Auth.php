<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\user;
use Illuminate\Support\Facades\Hash;
use Session;
class Auth extends Controller
{
    public function login(){
        return view('Login');

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
        return "Welcome";
    }
}