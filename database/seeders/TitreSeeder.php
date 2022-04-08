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
        DB::table('titres')->insert([
            'titre' => 'Provided (Services)',
            'soustitre' => 'OUR SERVICES',
            'description' => '',
        ]);
        DB::table('titres')->insert([
            'titre' => 'What You Can (Learn)',
            'soustitre' => 'OUR COURSES',
            'description' => 'You just think about TemplateMo whenever you need free CSS templates for your business website',
        ]);
        DB::table('titres')->insert([
            'titre' => 'What They (Think)',
            'soustitre' => 'TESTIMONIALS',
            'description' => '',
        ]);
    }
}
