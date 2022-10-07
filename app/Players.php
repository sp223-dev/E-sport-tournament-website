<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Myteam;

class Players extends Model
{
    protected $table = 'tbl_players';
    protected  $fillable = [
        'image',
        'nama',
        'kebangsaan',
        'posisi',
        'umur',
        'seasons',
        'games',
        'points',
        'about',
        'team_id'
    ];

    public function myteam() {
        return $this->belongsTo(Myteam::class, 'team_id');
    }    

}
