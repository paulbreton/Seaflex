<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etudiant')->insert([
           ['code' => 'TGV852', 'nom' => 'De Travers', 'prenom' => 'Né', 'date' => '2001-02-05', 'code_parcours' => '789OIU'],
           ['code' => 'EDC456', 'nom' => 'Ochat', 'prenom' => 'Harist', 'date' => '2001-05-26', 'code_parcours' => '789OIU'],
        ]);
    }
}
