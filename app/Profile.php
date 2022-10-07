<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table = 'tbl_profiles';

    protected $fillable = [
        'nama',
        'image',
        'kebangsaan',
        'tanggal_lahir',
        'negara',
        'status',
        'bahasa',
        'telp',
        'game',
        'hobbi',
    ];
}
