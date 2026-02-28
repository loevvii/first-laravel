<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StorageLocation;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();


        User::factory()->create([
            'name' => 'Test User2',
            'email' => 'test2@example.com',
            'password' =>'password',
        ]);
        StorageLocation::factory()->count(10)->create();
    }
}
