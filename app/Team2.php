<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team2 extends Model
{
    protected $table = 'team2s';
    protected $fillable = [
        'gambar','nama','score','sesi'
    ];   
}
