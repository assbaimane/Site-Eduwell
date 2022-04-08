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
            'position' => 'CEO & Founder',
        ]);
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'George Soft',
            'position' => 'CEO & Founder',
        ]);
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'John Doe',
            'position' => 'CEO & Founder',
        ]);
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'David Martin',
            'position' => 'CEO & Founder',
        ]);
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'Andrew Hall',
            'position' => 'CEO & Founder',
        ]);
        DB::table('testimonials')->insert([
            'avis' => '“just think about TemplateMo if you need free CSS templates for your website”',
            'nom' => 'Maxy Power',
            'position' => 'CEO & Founder',
        ]);
    }
}
