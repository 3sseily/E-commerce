<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(){
        return view("Auth.register");
    }

    public function handle_register(RegisterRequest $request){
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);
        return redirect('login');
}
}