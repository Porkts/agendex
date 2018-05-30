<?php

namespace Modules\Call\Entities;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = ["schedules_id","note"];
}
