<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Module extends Model
{
    protected $table = "module";

    /**
     * @return array
     */
    public function module()
    {
        return DB::select('select * from ue_content where code_module = ?', [$this->code]);
    }
}
