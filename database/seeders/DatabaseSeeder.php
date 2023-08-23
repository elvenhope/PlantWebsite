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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test1@example.com',
        //     'password' => bcrypt('12345678')
        // ]);

        /*
        Within the DatabaseSeeder class, you may use the call method to execute additional seed classes
        https://laravel.com/docs/8.x/seeding#calling-additional-seeders

        Now this command works as expected: php artisan migrate:refresh --seed
         */
        $this->call([
            ProductSeeder::class
        ]);

    }
}
