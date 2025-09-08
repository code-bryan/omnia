<?php

use App\Models\Company;
use App\Models\User;
function user()
{
    $company = Company::factory()->create();
    return User::factory()->create([
        "email"      => "email@test.in",
        'company_id' => $company->id,
    ]);
}

beforeEach(function () {
    Auth::logout();
});

test('Show the login page', function () {
    $response = $this->get(route('auth.login.index'));

    $response->assertStatus(200);
    $response->assertSee('auth.login.title');
});

test('login in with valid credentials', function () {
    $user = user();

    $response = $this->post(route('auth.login.store', [
        "email"    => $user->email,
        "password" => "password",
    ]));

    // TODO: change this to a valid URL
    $response->assertStatus(302);
    $this->assertAuthenticatedAs($user);
});

test('rejects login with invalid password', function () {
    $user = user();

    $response = $this->from(route('auth.login.index'))
        ->post(route('auth.login.store'), [
            'email'    => $user->email,
            'password' => 'wrong-pass',
        ]);

    $response->assertRedirect(route('auth.login.index'));
    $response->assertSessionHasErrors('auth');
    $this->assertGuest();
});

test('remembers the user when remember me is checked', function () {
    $user = user();

    $response = $this->post(route('auth.login.store'), [
        'email'    => $user->email,
        'password' => 'password',
        'remember' => true,
    ]);

    $response->assertRedirect('/');
    $this->assertAuthenticatedAs($user);

    // revisa que la cookie de remember_token exista
    $response->assertCookie(Auth::getRecallerName());
});
