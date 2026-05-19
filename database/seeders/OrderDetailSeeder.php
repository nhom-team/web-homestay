<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            $price = rand(500000, 3000000);
            $qty = rand(1, 5);

            DB::table('orders_detail')->insert([

                'order_id' => rand(1, 10),

                'rooms_id' => rand(1, 10),

                'price' => $price,

                'qty' => $qty,

                'amount' => $price * $qty,
            ]);
        }
    }
}