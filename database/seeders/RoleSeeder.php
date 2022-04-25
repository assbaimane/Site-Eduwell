<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'nom' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'nom' => 'Moderateur',
        ]);
        DB::table('roles')->insert([
            'nom' => 'WebMaster',
        ]);
        DB::table('roles')->insert([
            'nom' => 'Membre',
        ]);
    }
}
