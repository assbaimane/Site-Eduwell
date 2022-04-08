<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'Catherine Walk',
            'position' => '',
        ]);
        //
    }
}
