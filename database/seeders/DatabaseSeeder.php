<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([RoleSeeder::class]);

        \App\Models\User::factory()
            ->create([
                "name" => "Administrator",
                "email" => "ing.korozco@gmail.com",
                "password" => bcrypt("rug2c1f5"),
                "remember_token" => Str::random(10),
                "email_verified_at" => now(),
            ])
            ->assignRole("Admin");
    }
}