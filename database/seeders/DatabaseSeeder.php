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
        // User::factory(10)->create();

        User::factory()->create([
            'role' => 'admin',
            'name' => 'Admin',
            'email' => 'admin@app.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'role' => 'editor',
            'name' => 'Editor',
            'email' => 'editor@app.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'role' => 'subscriber',
            'name' => 'Subscriber',
            'email' => 'subscriber@app.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
