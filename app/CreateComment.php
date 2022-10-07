<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateComment extends Model
{
    protected $table = 'tbl_comments';
    protected $fillable = [ 
        'name',
        'email',
        'comment'
    ];


    // public function news() {
    //     return $this->hasMany(News::class);

    // }


}
