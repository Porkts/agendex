<?php

namespace Modules\Call\Entities;

use Illuminate\Database\Eloquent\Model;

class Window extends Model
{
    protected $fillable = ["user_id","name"];
}
