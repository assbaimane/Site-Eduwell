<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navs")->insert([
            "logo" => "/images/templatemo-eduwell.png",
            "tabs" => "Home",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "tabs" => "Services",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "tabs" => "Courses",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "tabs" => "Testimonials",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "tabs" => "Contact Us",
        ]);
    }
}
