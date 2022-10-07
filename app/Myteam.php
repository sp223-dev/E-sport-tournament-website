<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Myteam extends Model
{
    protected $table = 'tbl_myteams';
    protected $fillable = [
        'id',
        'nama',
        'image',
        'country',
        'founded',
        'ground',
        'president',
        'head_coach',
        'championship',
        'date',
        'time' ,
        'match_id'
    ];

    public function players() {

        return $this->hasMany('App\Players', 'players_id', 'id');

    }   

    public function coach() {
        return $this->hasMany('App\Coach', 'coach_id', 'id');
    }   
    public function match() {
        return $this->belongsTo('App\Matchs', 'match_id');
    }   

}

