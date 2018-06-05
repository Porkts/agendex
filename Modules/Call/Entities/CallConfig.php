<?php

namespace Modules\Call\Entities;

use Illuminate\Database\Eloquent\Model;

class CallConfig extends Model
{
    protected $fillable = ["name","value"];


    public static function getValue($colum)
    {
    	return \DB::select('select value from call_configs where name = ?', [$colum])[0]->value;
    }
}
