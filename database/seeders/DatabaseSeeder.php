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
        // Make test users if don't have any
        if (User::count() === 0) {
            User::factory()->create([
                'name' => 'Admin User',
                'email' => 'admin@admin.com',
            ]);
            User::factory(10)->create();
        }

        $this->call(BookSeeder::class);
    }
}
