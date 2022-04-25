<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Imane',
            'role_id' => 1,
            'email' => 'imane@hotmail.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Yassin',
            'role_id' => 2,
            'email' => 'yassin@hotmail.com',
 'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Elias',
            'role_id' => 3,
            'email' => 'elias@hotmail.com',
 'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'Amanda',
            'role_id' => 4,
            'email' => 'amanda@hotmail.com',
 'password' => Hash::make('123456'),
        ]);
        //Seeder pour user sert à ce que quand je fresh seed, les users crées existent toujours et les comptes aussi
    }
}