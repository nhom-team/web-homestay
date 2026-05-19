<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {

            DB::table('contacts')->insert([

                'user_id' => rand(1, 10),

                'name' => 'Khách hàng ' . $i,

                'email' => 'contact' . $i . '@gmail.com',

                'phone' => '09000000' . $i,

                'title' => 'Tiêu đề liên hệ ' . $i,

                'content' => 'Nội dung liên hệ số ' . $i,

                'replay_id' =>0,

                'created_at' => now(),

                'updated_at' => now(),

                'updated_by' => null,

                'deleted_at' => null,

                'status' => rand(1, 2),
            ]);
        }
    }
}