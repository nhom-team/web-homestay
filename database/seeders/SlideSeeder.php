<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlideSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            DB::table('slides')->insert([

                'name' => 'Slide ' . $i,

                'image' => 'slide' . $i . '.jpg',

                'link' => 'https://example.com/slide-' . $i,

                'sort_order' => $i,

                'position' => $i % 2 == 0
                    ? 'advertise'
                    : 'slideshow',

                'description' => 'Mô tả slide ' . $i,

                'created_by' => 1,
                'updated_by' => null,

                'status' => rand(1, 2),

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}