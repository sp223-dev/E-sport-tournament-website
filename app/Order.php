<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

	protected $table = 'tbl_orders'; 
    protected $fillable = [
        'user_id', 'tanggal','status','kode','jumlah_harga'
   ];

    public function user()
	{
	      return $this->belongsTo('App\User','user_id', 'id');
	}

	public function order_detail() 
	{
	     return $this->hasMany('App\OrderDetail','Order_id', 'id');
	}
}
