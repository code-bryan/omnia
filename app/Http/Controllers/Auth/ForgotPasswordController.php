<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\ForgotPasswordRequest;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view("auth.forgot-password");
    }

    public function store(ForgotPasswordRequest $request)
    {
        $email = $request->only("email");

        $status = Password::sendResetLink($email);

        return view("auth.reset-password")->with(["status" => $status]);
    }
}
