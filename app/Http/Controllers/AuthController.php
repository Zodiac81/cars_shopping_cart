<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup(){
        return view('user/signup');
    }

    public function postSignup(Request $request){

        $this->validate($request, [
            'email'=>'email|required|unique:users',
            'password'=>'required|min:4'
        ]);
        echo "<pre>";
        print_r($_POST);
        exit;

        $user = new User([
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        $user->save();

        return redirect()->route('product.index');

    }
}
