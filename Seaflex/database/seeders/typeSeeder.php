<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type')->insert([
           ['code_parcours' => '789OIU', 'semestre' => 'pair', 'periode' => 'academique', 'annee' => 2022, 'majeur' => 'FondProgMaj', 'mineur' => 'HardMin'],
           ['code_parcours' => '789OIU', 'semestre' => 'impair', 'periode' => 'academique', 'annee' => 2022, 'majeur' => 'SoInfoMaj', 'mineur' => 'CloudMin'],
           ['code_parcours' => '789OIU', 'semestre' => 'pair', 'periode' => 'academique', 'annee' => 2023, 'majeur' => 'SoMathsMaj', 'mineur' => 'IASymMin'],
           ['code_parcours' => '789OIU', 'semestre' => 'impair', 'periode' => 'academique', 'annee' => 2023, 'majeur' => 'SoInfoMaj', 'mineur' => 'CloudMin'],
           ['code_parcours' => '789OIU', 'semestre' => 'pair', 'periode' => 'academique', 'annee' => 2024, 'majeur' => 'WebMaj', 'mineur' => 'SysResMin'],
           ['code_parcours' => '789OIU', 'semestre' => 'impair', 'periode' => 'academique', 'annee' => 2024, 'majeur' => 'SoInfoMaj', 'mineur' => 'CloudMin'],
        ]);
    }
}
