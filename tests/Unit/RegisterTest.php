<?php
use App\Models\User;
use function Pest\Laravel\postJson;

test('register', function () {
    $user = User::factory()->raw();
    $response = postJson('api/register', $user);
    $response->assertStatus(200)->assertJsonStructure(['message', 'token']);
});

