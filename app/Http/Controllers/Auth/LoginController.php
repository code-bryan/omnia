<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Auth;

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
     * @param \App\Http\Requests\LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $credentials = $request->only("email", "password");
        $remember    = $request->boolean("remember");

        try {
            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();
                return redirect()->intended("/");
            }
        } catch (\Throwable $e) {
            dd($e->getMessage(), $e->getTraceAsString());
        }

        $errors = ["auth" => __("auth.login.error")];
        var_dump($errors);
        return back()->withErrors($errors)->withInput();
    }
}
