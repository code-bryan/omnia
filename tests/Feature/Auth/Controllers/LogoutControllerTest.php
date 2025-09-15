<?php

test('log the user out', function () {
    $user = user();
    $this->actingAs($user);

    $response = $this->post(route('auth.logout'));

    $response->assertRedirect(route('auth.login.index'));
    $this->assertGuest();
});
