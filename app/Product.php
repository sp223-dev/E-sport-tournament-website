<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tbl_products'; 
    protected $fillable = [
        'category_id','nama', 'stok','harga','deskripsi','image'
   ];

   public function category()
   {
          return $this->belongsTo('App\Category','category_id','id');
   }

   public function order_detail() 
	{
	     return $this->hasMany('App\OrderDetail','Product_id', 'id');
	}
}
