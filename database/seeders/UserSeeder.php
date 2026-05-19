<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            DB::table('users')->insert([

                'name' => 'User ' . $i,
                //'email' => 'user' . $i . '@gmail.com',
                'email' => 'user' . $i . '_' . time() . '@gmail.com',
                'phone' => '09000000' . $i,
                'password' => bcrypt('123456'),
                'address' => 'Địa chỉ user ' . $i,
                'avatar' => 'user' . $i . '.png',
                'role' => $i % 3 == 0 ? 'admin'
                    : ($i % 2 == 0 ? 'host' : 'customer'),
                'description' => 'Mô tả user ' . $i,
                'created_by' => 1,
                'updated_by' => null,
                'status' => rand(1, 2),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
