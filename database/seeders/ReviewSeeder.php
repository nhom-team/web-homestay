<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {

            DB::table('reviews')->insert([
                'user_id' => DB::table('users')->inRandomOrder()->value('id'),
                'room_id' => DB::table('rooms')->inRandomOrder()->value('id'),
                'rating' => rand(1, 5),
                'comment' => 'Đánh giá phòng số ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
                'updated_by' => null,
                'deleted_at' => null,
                'status' => rand(1, 2),
            ]);
        }
    }
}
