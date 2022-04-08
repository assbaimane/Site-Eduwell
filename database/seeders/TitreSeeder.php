<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titre' => 'Best Place To Learn Graphic (Design!)',
            'soustitre' => 'Welcome To Our School',
            'description' => '',
        ]);

    }
}
