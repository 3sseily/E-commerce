<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("Auth.login");
    }

    public function handle_login(LoginRequest $request)
    {
        $data = $request->all();
        $cret = Auth::attempt(['email' => $data['email'], 'password' => $data['password']]);
        // dd($cret);
        if ($cret) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
    }
}
