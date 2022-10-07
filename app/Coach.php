<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $table = 'tbl_coach';
    protected $fillable = [
        'image',
        'nama',
        'kebangsaan',
        'posisi',
        'umur',
        'seasons',
        'about',
        'team_id'
    ];

    public function myteam() {
        return $this->belongsTo('App\Myteam', 'team_id', 'id');
    }    
}
