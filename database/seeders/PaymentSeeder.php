<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $methods = ['cash', 'momo', 'banking'];
        $statuses = ['pending', 'paid', 'failed'];

        for ($i = 1; $i <= 10; $i++) {

            DB::table('payments')->insert([

                'order_id' => rand(1, 10),

                'user_id' => rand(1, 10),

                'amount' => rand(500000, 5000000),

                'payment_method' => $methods[array_rand($methods)],

                'payment_status' => $statuses[array_rand($statuses)],

                'transaction_code' => 'TRANS' . rand(100000, 999999),

                'created_at' => now(),

                'updated_at' => now(),

                'updated_by' => null,

                'deleted_at' => null,

                'status' => rand(1, 2),
            ]);
        }
    }
}