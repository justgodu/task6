<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PhoneNumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('phone_nums')->insert([
            'user_id' => \mt_rand(1,2),
            'tel_number' => mt_rand(500000000,599999999)
        ]);

    }
}
