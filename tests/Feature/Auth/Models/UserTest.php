<?php

use App\Models\Company;
use App\Models\User;

test('Get User initials from the name', function () {
    $company = Company::factory()->create();

    $user = User::factory()->create([
        "firstname"  => "John",
        "lastname"   => "Doh",
        'company_id' => $company->id,
    ]);

    expect($user->initials())->toBe("JD");
});
