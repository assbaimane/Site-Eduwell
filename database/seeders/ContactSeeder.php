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
            'contact1' => 'PHONE',
            'value_contact1' => '010-020-0340',
            'icone1' => 'fa fa-phone',
            'contact2' => 'MOBILE',
            'value_contact2' => '090-080-0760',
            'icone2' => 'fa fa-phone',
        ]);
        //
    }
}
