<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'info@mal-electronics.com',
            'password' => Hash::make('interface_admin_2021!'),
            'is_admin' => true,
            'pile_sn' => '61689761900606',
        ]);
    }
}
