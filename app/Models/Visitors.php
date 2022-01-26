<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    use HasFactory;

    public $fillable= [
        'name',
        'city',
        'marital_status',
        'sex',
        'age',
        'attends_some_cell',
        'leader_cell',
        'baptized',
        'is_away',
    ];
}
