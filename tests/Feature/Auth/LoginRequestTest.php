<?php

use App\Http\Requests\LoginRequest;

test('passes validation wtesth valid data', function () {
    $data = [
        'email'    => 'test@example.com',
        'password' => 'secret123',
        'remember' => 'on', // opcional
    ];

    $request = new LoginRequest();
    $rules   = $request->rules();

    $validator = Validator::make($data, $rules);
    expect($validator->fails())->toBeFalse();
});

test('fails validation when email is missing', function () {
    $data = [
        'password' => 'secret123',
    ];

    $request = new LoginRequest();
    $rules   = $request->rules();

    $validator = Validator::make($data, $rules);
    expect($validator->fails())->toBeTrue();
    expect($validator->errors()->has('email'))->toBeTrue();
});

test('fails validation when password is missing', function () {
    $data = [
        'email' => 'test@example.com',
    ];

    $request = new LoginRequest();
    $rules   = $request->rules();

    $validator = Validator::make($data, $rules);
    expect($validator->fails())->toBeTrue();
    expect($validator->errors()->has('password'))->toBeTrue();
});

test('passes validation without remember field', function () {
    $data = [
        'email'    => 'test@example.com',
        'password' => 'secret123',
        // remember no está presente
    ];

    $request = new LoginRequest();
    $rules   = $request->rules();

    $validator = Validator::make($data, $rules);
    expect($validator->fails())->toBeFalse();
});
