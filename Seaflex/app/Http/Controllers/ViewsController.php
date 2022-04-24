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
            $array['columns'] = DB::select('select COLUMN_NAME from information_schema.columns where table_name = ?', [$request->input('view')]);
            $array['results'] = DB::select("select * from $view");
        }
        return view('views', $array);
    }
}
