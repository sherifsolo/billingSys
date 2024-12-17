<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{

    //logs in user and returns a dashboard according to the role the user plays
    public function login(Request $request){
        $userData = $request->validate(
            [
                'loginUsername' => 'required',
                'loginpassword' => 'required'
            ]
            );

            return view('dashboard');
    }
}
