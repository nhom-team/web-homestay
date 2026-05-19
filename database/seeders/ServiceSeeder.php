<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            DB::table('services')->insert([

                'room_id' => rand(1, 10),

                'name' => 'Dịch vụ ' . $i,

                'image' => 'service' . $i . '.jpg',

                'description' => 'Mô tả dịch vụ ' . $i,

                'price' => rand(100000, 1000000),

                'created_by' => 1,
                'updated_by' => null,

                'status' => rand(1, 2),

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}