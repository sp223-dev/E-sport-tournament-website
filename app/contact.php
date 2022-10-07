<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'tbl_contacts';
    protected $fillable = [ 
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];
}
