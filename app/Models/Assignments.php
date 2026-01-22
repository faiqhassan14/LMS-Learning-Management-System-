<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignments extends Model
{
        protected $fillable = [
        'topic',
        'desc',
        'marks',
        'batch',
        'deadline',
        'type',
        'file',
    ];
}
