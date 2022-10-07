<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerTeam extends Model
{
    protected $table = 'tbl_player_teams';
    protected $fillable = [
        'id_player',
        'id_team',
        'seasons',
        'games',
        'points',
       ' about'

    ];
}
