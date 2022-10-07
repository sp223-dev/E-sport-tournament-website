<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
<<<<<<< HEAD
=======

>>>>>>> 14a269eebab3c8b38abc97a976a55cae4019d9c8
    protected $table = 'tbl_gambar';
    protected $fillable = [
        'user_id',
        'url',
    ];

    public function user() {//user yang menginput data image
        return $this->belongsTo('App\User', 'user_id');
    }
}
