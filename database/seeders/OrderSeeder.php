<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            DB::table('orders')->insert([

                'user_id' => rand(1, 10),

                'name' => 'Khách hàng ' . $i,

                'phone' => '09000000' . $i,

                'email' => 'khach' . $i . '@gmail.com',

                'address' => 'Địa chỉ khách hàng ' . $i,

                'note' => 'Ghi chú đơn hàng ' . $i,

                'created_at' => now(),

                'updated_at' => now(),

                'updated_by' => null,

                'deleted_at' => null,

                'status' => rand(1, 2),
            ]);
        }
    }
}