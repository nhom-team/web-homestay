<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {

            $title = 'Bài viết homestay ' . $i;

            DB::table('posts')->insert([

                'title' => $title,
                'slug' => Str::slug($title),
                'detail' => 'Chi tiết bài viết số ' . $i,
                'image' => 'post' . $i . '.jpg',
                'post_type' => $i % 2 == 0 ? 'post' : 'page',
                'description' => 'Mô tả bài viết ' . $i,
                'created_by' => 1,
                'updated_by' => null,
                'deleted_at' => null,
                'status' => rand(1, 2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}