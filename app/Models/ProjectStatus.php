<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    public $fillable = [
        "name",
        "slug",
    ];
}
