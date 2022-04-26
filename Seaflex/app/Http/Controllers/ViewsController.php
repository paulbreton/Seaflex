<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewsController extends Controller
{
    public function index(Request $request) {
        $view = $request->input('view');
        $array = [
            'views' => DB::select("SHOW FULL TABLES WHERE Table_type = 'VIEW';"),
        ];
        if ($request->input('view')) {
            $array['columns'] = DB::select('select COLUMN_NAME from information_schema.columns where table_name = ? order by COLUMN_NAME ', [$request->input('view')]);
            $result = DB::select("select * from $view");
            $result_toArray = json_decode(json_encode($result), true);
            $arraySort = [];
            foreach ($result_toArray as $key=>$value) {
                ksort($value);
                $arraySort[$key] = $value;
            }
            $array['results'] = $arraySort;
        }
        return view('views', $array);
    }
}
