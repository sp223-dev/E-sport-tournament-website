<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team1 extends Model
{
    protected $table = 'team1s';
    protected $fillable = [
        'gambar','nama','score','sesi'
    ];   
}
