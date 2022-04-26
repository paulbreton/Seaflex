<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inscrit')->insert([
            ['code_ue'=> 'FondProgMaj', 'code_etudiant' => 'TGV852', 'annee' => 2022, 'semestre' => 'pair', 'valide' => 0],
            ['code_ue'=> 'HardMin', 'code_etudiant' => 'TGV852', 'annee' => 2022, 'semestre' => 'pair', 'valide' => 0],
            ['code_ue'=> 'FondProgMaj', 'code_etudiant' => 'EDC456', 'annee' => 2023, 'semestre' => 'pair', 'valide' => 0],
            ['code_ue'=> 'HardMin', 'code_etudiant' => 'EDC456', 'annee' => 2022, 'semestre' => 'pair', 'valide' => 0],
        ]);
    }
}
