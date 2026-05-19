<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomestaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            $name = 'Homestay ' . $i;

            DB::table('homestay')->insert([

                'name' => $name,

                'slug' => Str::slug($name),

                'image' => 'homestay' . $i . '.jpg',

                'parent_id' => 0,

                'sort_order' => $i,

                'description' => 'Mô tả homestay ' . $i,

                'created_at' => now(),

                'created_by' => 1,

                'updated_at' => now(),

                'updated_by' => null,

                'deleted_at' => null,

                'status' => rand(1, 2),
            ]);
        }
    }
}