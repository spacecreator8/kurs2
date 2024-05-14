<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Avatar;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::factory(5)->create();
        Avatar::factory(5)->create();
        User::factory(3)->create();


        // \App\Models\UserOld::factory()->create([
        //     'name' => 'Test UserOld',
        //     'email' => 'test@example.com',
        // ]);
    }
}
