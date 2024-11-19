<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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

        DB::table('roles')->insert([
            ['name' => 'Jamaah', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Takmir', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DC', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Umar', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PTQ', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Imam Muda', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::factory()->create([
            'name' => 'Admin Hakim',
            'email' => 'luthfyhakim@gmail.com',
            'password' => bcrypt('adminhakim'),
            'role_id' => 3,
        ]);
    }
}
