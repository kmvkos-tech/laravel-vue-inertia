<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       

        \App\Models\User::factory()->create([
            'name' => 'Antigoni',
            'email' => 'test@example.com',
        ]);
       

        \App\Models\Project::factory()->count(13)->create();
    }
}
