<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('11111111'),
                'role' => 'admin'
            ],
            [
                'name' => 'Abu Naiim',
                'email' => 'abunaiim4@gmail.com',
                'password' => bcrypt('11111111'),
                'role' => 'normal'
            ],
        ]);
    }
}
