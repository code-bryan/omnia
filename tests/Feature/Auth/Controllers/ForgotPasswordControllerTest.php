<?php

use Illuminate\Auth\Notifications\ResetPassword;

test('Show the forgot password page', function () {
    $response = $this->get(route('auth.forgot.index'));

    $response->assertStatus(200);
    $response->assertSee(__('auth.forgot.title'));
});

test('send request email', function () {
    Notification::fake();
    $user = user();

    $response = $this->post(route('auth.forgot.store'), [
        'email' => $user->email,
    ]);

    Notification::assertSentTo($user, ResetPassword::class);
    $response->assertStatus(200);
    $response->assertSee(__('auth.reset.title'));
});

test('fail to send request email but show', function () {
    Notification::fake();

    $response = $this->from(route('auth.forgot.index'))
        ->post(route('auth.forgot.store'), ['email' => "test@erfn.enf"]);

    Notification::assertNothingSent();
    $response->assertViewIs('auth.reset-password');
});
