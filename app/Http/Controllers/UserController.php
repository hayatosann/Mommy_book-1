<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function confirm(Request $request){
        // dd($request);
        $nickname = $request->name;
        $gender = $request->gender;
        $zipcode = $request->zipcode;
        $email = $request->email;
        $birthdate = $request->birthdate;
        return view('users.confirm', compact('nickname', 'gender', 'zipcode', 'email', 'birthdate'));
    }
}
