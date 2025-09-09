<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Auth;
use Request;

class LoginController extends Controller
{
    /**
     * Login Page
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("auth.login");
    }

    /**
     * Login check method
     * @param \App\Http\Requests\Auth\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");
        $remember    = $request->boolean("remember");

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        $errors = ["auth" => __("auth.login.error")];
        var_dump($errors);
        return back()->withErrors($errors)->withInput();
    }
}
