<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getSignup(){
        return view('user/signup');
    }

    public function postSignup(Request $request){


        $this->validate($request, [
            'login'=>'required|min:4',
            'email'=>'email|required|unique:users',
            'password'=>'required|min:4'
        ]);


        $user = new User([
            'name'=>$request->login,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        $user->save();
        Session::flash('success', 'You have registered');
        return redirect()->route('product.index')->with(Auth::user());

    }

    public function getSignin(){
        return view('user/signin');
    }

    public function postSignin(Request $request)
    {


        $this->validate($request, [
            'email' => 'email|required|',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $id = Auth::id();
            Session::flash('success', 'You have login');
            return redirect()->route('user.getUserProfile', compact('id'));
        } else {
            Session::flash('error', 'Something went wrong');
            return redirect()->route('user.postSignin');

        }

    }

    public function userLogout(){
        Auth::logout();
        Session::flash('success', 'You have been login out');
        return redirect()->route('product.index');
    }

    public function getUserProfile(){
        return view('user.profile');
    }


}
