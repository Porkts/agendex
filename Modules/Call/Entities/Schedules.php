<?php

namespace Modules\Call\Entities;

use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    protected $fillable = ["user_id","date_hour","status","processing_time","finished_time","window_id"];
}
