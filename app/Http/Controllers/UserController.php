<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function createUser(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->cellphone = $request->cellphone;
        $user->bithday = $request->birthday;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $user->save();
        return response()->json($user);
    }
}