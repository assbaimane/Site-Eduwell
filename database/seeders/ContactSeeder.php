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
            'map' => '',
            'contact1' => '',
            'value-contact1' => '',
            'icone1' => '',
            'contact2' => '',
            'value-contact2' => '',
            'icone2' => '',
        ]);
        //
    }
}
