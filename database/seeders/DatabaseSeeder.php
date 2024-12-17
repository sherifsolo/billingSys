<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create(); ---this will create 10 random users in our database

        User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('this is just a test.'),
            'id' => 1///should auto increment 
        ]);

    }
}
