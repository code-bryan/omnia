<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

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
}
