<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            HomestaySeeder::class,
            RoomSeeder::class,
            ServiceSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class,
            PaymentSeeder::class,
            ReviewSeeder::class,
            PostSeeder::class,
            SlideSeeder::class,
            ContactSeeder::class
        ]);
    }
}
