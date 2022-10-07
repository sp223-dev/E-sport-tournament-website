<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    protected $table = 'tbl_matchs';
    protected $fillable = [
        'team_id',
        'team_id2',
        'status',
        'score1',
        'score2',
        'tanggal',
        'waktu',
        'arena',
        'image',
        'weather',
        'detail'

    ];

    public function myteam() {
        return $this->belongsTo(Myteam::class, 'team_id');
    }
    public function myteam2() {
        return $this->belongsTo(Myteam2::class, 'team_id2');
    }
}
