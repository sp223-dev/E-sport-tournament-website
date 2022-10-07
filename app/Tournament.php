<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $table = 'tbl_tournaments';

    protected $fillable = [
        'title','image','prizepool','seats','date','place'   
    ];
}
