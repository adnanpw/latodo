<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // protected $table = 'todos';
    protected $fillable = [
        'task','status'
    ];
}
