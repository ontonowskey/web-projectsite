<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $user = User::where([['login', $request->login],['password', $request->password]]) ->first();
        if (is_null($user)) {
            return "Неверный логин или пароль";
        }
        Auth::login($user);
        return back()->withInput();

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return back()->withInput();
    }

}
