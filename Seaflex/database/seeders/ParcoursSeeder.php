<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcoursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parcours')->insert([
            ['code' => '789OIU', 'libelle' => 'Imr'],
            ['code' => '456DFG', 'libelle' => 'Phot'],
            ['code' => '123KLM', 'libelle' => 'Info'],
        ]);
    }
}
