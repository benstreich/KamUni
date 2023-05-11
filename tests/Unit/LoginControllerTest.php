<?php

namespace Tests\Feature\Controllers;

use App\Models\Registration;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_user_can_login_successfully()
    {
        $user = Registration::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'password123',
        ]);

        $response->assertRedirect('/start');
        $this->assertTrue(Session::has('loginId'));
        $this->assertEquals($user->id, Session::get('loginId'));
    }

    public function test_user_cannot_login_with_invalid_credentials()
    {
        $user = Registration::factory()->create([
            'email' => 'test@example.com',
            'password' => Hash::make('password123'),
        ]);

        $response = $this->post('/login', [
            'email' => 'test@example.com',
            'password' => 'wrongpassword',
        ]);

        $response->assertSessionHasErrors(['fail']);
        $this->assertFalse(Session::has('loginId'));
    }

    public function test_user_cannot_login_with_unregistered_email()
    {
        $response = $this->post('/login', [
            'email' => 'unregistered@example.com',
            'password' => 'password123',
        ]);

        $response->assertSessionHasErrors(['fail']);
        $this->assertFalse(Session::has('loginId'));
    }

    public function test_user_can_logout()
    {
        Session::put('loginId', 1);

        $response = $this->get('/logout');

        $response->assertRedirect('/');
        $this->assertFalse(Session::has('loginId'));
    }
}
