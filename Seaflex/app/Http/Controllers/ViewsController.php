<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
    public function index(Request $request) {
        $array = [
            'views' => DB::select("SHOW FULL TABLES WHERE Table_type = 'VIEW';"),
        ];
        if ($request->input('view')) {
            $array['columns'] = DB::select("select COLUMN_NAME from information_schema.columns where table_name = 'vueUePaire'");
            $array['results'] = DB::select("SELECT * FROM vueModuleImpaire");
        }
        return $array;
    }
}
