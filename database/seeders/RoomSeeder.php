<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {

            $name = 'Phòng Homestay ' . $i;

            DB::table('rooms')->insert([

                'homestay_id' => rand(1, 10),

                'name' => $name,

                'slug' => Str::slug($name),

                'price_buy' => rand(500000, 1000000),

                'price_sale' => rand(1200000, 3000000),

                'image' => 'product' . $i . '.jpg',

                'qty' => rand(1, 20),

                'detail' => 'Chi tiết sản phẩm ' . $i,

                'description' => 'Mô tả sản phẩm ' . $i,

                'created_by' => 1,
                'updated_by' => null,

                'status' => rand(1, 2),

                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}