<?php

namespace Tests\Feature\Controllers;

use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegistrationControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_register_user_successfully()
    {
        $userData = [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'password123',
        ];

        $response = $this->post('/register', $userData);

        $response->assertRedirect('/start');
        $this->assertDatabaseHas('registration', [
            'firstname' => $userData['firstname'],
            'lastname' => $userData['lastname'],
            'email' => $userData['email'],
        ]);
    }

    public function test_register_user_with_missing_fields()
    {
        $userData = [
            'firstname' => $this->faker->firstName,
            'lastname' => '', // Missing lastname
            'email' => '', // Missing email
            'password' => 'password123',
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors(['lastname', 'email']);
        $this->assertDatabaseMissing('registration', [
            'firstname' => $userData['firstname'],
        ]);
    }

    public function test_register_user_with_existing_email()
    {
        $existingUser = Registration::factory()->create();

        $userData = [
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'email' => $existingUser->email, // Existing email
            'password' => 'password123',
        ];

        $response = $this->post('/register', $userData);

        $response->assertSessionHasErrors(['email']);
        $this->assertDatabaseMissing('registration', [
            'firstname' => $userData['firstname'],
            'email' => $userData['email'],
        ]);
    }
}
