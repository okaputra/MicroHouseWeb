<?php

namespace App\Http\Controllers;

use Redirect;
use Illuminate\Support\MessageBag;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){
        if(!\Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            $errors = new MessageBag(['password' => ['Email and/or password invalid.']]);
            return Redirect::back()->withErrors($errors);
        }

        return redirect('/home');
    }
    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $request){

        $this->validate($request,[
            'name'=> 'required|min:4',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:8|confirmed',
        ]);
        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'monthly_income'=>$request->monthSalary
        ]);
        
        auth()->loginUsingId($user->id);

        return redirect()->route('home');
    }
    public function logOut(){
        \Auth::logout();
        return redirect()->route('login');
    }
}
