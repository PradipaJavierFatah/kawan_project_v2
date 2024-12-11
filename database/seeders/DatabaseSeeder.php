<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mentor;  // Import your Mentor model
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // You can call the MentorSeeder to populate the mentors table
        $this->call(MentorSeeder::class);

<<<<<<< HEAD
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Correct placement of seeder call
        $this->call(ArticlesTableSeeder::class);
=======
        // Optionally, you can also seed other tables like Users or others
        // $this->call(UserSeeder::class);
>>>>>>> 952e6e14bb6212cbcdaec02ffef2a0605f421d3a
    }
}
