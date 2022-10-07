<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tbl_news';
    protected $fillable = [
        'judul',
        'date',
        'author',
        'category_id',
        'image',
        'deskripsi',     
    ];

    public function category()
   {
          return $this->belongsTo('App\Category','category_id','id');
   }

}
