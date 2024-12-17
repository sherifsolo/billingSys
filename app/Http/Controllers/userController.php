<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\validation\Rule;
//use app\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;




class userController extends Controller
{
/*
register
    strip all special characters that can be used maliciously(xxs, xml injection, sql injection)---regex expression
    verify provided credentials meeet the desired rules
    verify email address exists

login
    strip user input
    verify user exits if true return a page based on role played by the user 
       else redirect user to login page or signup page
    
    add logic to prevent user enumaration or password spraying i.e limit the number of failed attempts to 3-5

logout
    destroy session and deauthenticate the user
*/




    public function registerUser(Request $request){
        //validate our users data to ensure it meets our policy
        $userData = $request->validate([
            'RegUsername' => ['required', 'max:255', Rule::unique('users', 'email')],
            'RegPassword' => ['reqiured', 'min:8', 'max:64'],
    ]);
    //hash the given password with bcrypt/md5/sha(x)/hash
        $userData['regPassword'] = bcrypt($userData['regPassword']);
    //add user to our database
        $registeredUser = User::create($userData);
    //log in user after registering
    Auth::login($registeredUser);

        //return "You've been successfully signed up.You can close this tab and login to your new account";
        return view('welcome');// return redirect('/dashboard');
    }

    //logs in user and returns a dashboard according to the role the user plays
    public function loginUser(Request $request){
        $userData = $request->validate(
            [
                'loginUsername' => 'required',
                'loginPassword' => 'required'
            ]
            );

            //attempt authentication if true generate a session and the cookie the user will use for the session
            if(Auth::attempt([
                'email' => $userData['loginUsername'],
                 'password' => $userData['loginPassword']]
            )){
                $request->session()->regenerate();
            }

            return view('dashboard');
    }

    //log out user and redirect to our login page
    public function logoutUser(){
        Auth::logout();
        return redirect('/login');
    }


}
