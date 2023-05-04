<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Registration;
use Illuminate\Database\Seeder;
use App\Models\TeacherRegistration;
use App\Models\Subject;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Registration::truncate();
        Registration::factory()->count(50)->create();

        TeacherRegistration::truncate();
        TeacherRegistration::factory()->count(50)->create();

        Subject::truncate();
        Subject::factory()->count(50)->create();
    }
}
