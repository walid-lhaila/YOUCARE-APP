<?php
use App\Models\User;
use function Pest\Laravel\postJson;

test('login', function () {
    $userCredential = ['email' => User::first()->email, 'password'=>'password'];
    $response = postJson('api/login', $userCredential);
    $response->assertStatus(200)->assertJsonStructure(['message', 'token']);
});
