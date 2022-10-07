<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SearchResult extends Model
{
    protected $table = 'tbl_news';
    protected $fillable = [ 
        'image',
        'judul',
        'tanggal',
        'deskripsi'

    ];
}
