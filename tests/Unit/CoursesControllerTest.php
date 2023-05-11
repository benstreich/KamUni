<?php

namespace Tests\Feature\Controllers;

use App\Models\Subject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoursesControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_method_returns_courses_signed_view()
    {
        $response = $this->get('/courses');

        $response->assertStatus(200);
        $response->assertViewIs('courses_signed');
    }
}
