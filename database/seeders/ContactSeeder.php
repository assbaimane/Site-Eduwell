<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'map' => 'place de la minoterie 10',
            'contact1' => 'PHONE',
            'valuecontact1' => '010-020-0340',
            'icone1' => 'fa-solid fa-phone',
            'contact2' => 'MOBILE',
            'valuecontact2' => '090-080-0760',
            'icone2' => 'fa-solid fa-phone',
        ]);
        //
    }
}
