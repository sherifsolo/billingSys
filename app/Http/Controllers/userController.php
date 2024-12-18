<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;




class UserController extends Controller
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
            'email' => ['required', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:64']
    ], [
        'email.unique' => 'This email is already registered.',
        'password.min' => 'Password must be at least 8 characters long, contain atleast one lower and upper case letter, number and special character.',
    ]);
    //hash the given password with bcrypt/md5/sha(x)/hash
        $userData['password'] =  Hash::make($userData['password']);
    //add user to our database
    try {
        $registeredUser = User::create($userData);
        //log in user after registering
        //Auth::login($registeredUser);
        Auth::attempt([
            'email' => $userData['email'],
             'password' => $userData['password']]
        );
        return redirect()->route('dashboard');

    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Something went wrong. Please try again.']);
    }

    }

    //logs in user and returns a dashboard according to the role the user plays
    public function loginUser(Request $request){
        $userData = $request->validate(
            [
                'email' => 'required',
                'password' => 'required'
            ]
            );

            //attempt authentication if true generate a session and the cookie the user will use for the session
            if(!Auth::attempt([
                'email' => $userData['email'],
                 'password' => $userData['password']]
            )){
                return view('welcome');
            }
            
            $request->session()->regenerate();
            return view('dashboard');
    }

    //log out user and redirect to our login page
    public function logoutUser(){
        Auth::logout();
        return redirect('/login');
    }
}