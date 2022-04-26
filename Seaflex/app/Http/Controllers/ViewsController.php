<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
    /**
     * Liste des views créées avec leur résultat
     * @param Request $request
     */
    public function index(Request $request) {
        $view = $request->input('view');
        // liste des views dans la BDD Seaflex
        $array = [
            'views' => DB::select("SHOW FULL TABLES WHERE Table_type = 'VIEW';"),
        ];
        // $request->input('view') contient la view que l'on souhaite afficher
        if ($request->input('view')) {
            // récupération des colonnes de la view
            $array['columns'] = DB::select('select COLUMN_NAME from information_schema.columns where table_name = ? order by COLUMN_NAME ', [$request->input('view')]);
            // récupération des données de la vues
            $result = DB::select("select * from $view");

            // Trie des résultats
            $result_toArray = json_decode(json_encode($result), true);
            $arraySort = [];
            foreach ($result_toArray as $key=>$value) {
                ksort($value);
                $arraySort[$key] = $value;
            }
            //
            $array['results'] = $arraySort;
        }
        return view('views', $array);
    }
}
