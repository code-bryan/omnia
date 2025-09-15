<?php

use App\Http\Requests\Auth\ForgotPasswordRequest;

test('passes validation with valid data', function () {
    $data = ['email' => 'test@email.com'];

    $request = new ForgotPasswordRequest();
    $rules   = $request->rules();

    $validator = Validator::make($data, $rules);
    expect($validator->fails())->toBeFalse();
});

test('fails validation with email is missing', function () {
    $request = new ForgotPasswordRequest();
    $rules   = $request->rules();

    $validator = Validator::make([], $rules);
    expect($validator->fails())->toBeTruthy();
});
