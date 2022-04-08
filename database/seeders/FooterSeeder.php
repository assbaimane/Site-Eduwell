<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => 'Copyright © 2022 EduWell Co., Ltd. All Rights Reserved.',
            'designed' => 'Design: (TemplateMo)',
        ]);
        //
    }
}
