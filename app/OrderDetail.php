<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

	protected $table = 'tbl_order_details'; 
    protected $fillable = [
        'product_id', 'order_id','jumlah','jumlah_harga'
   ];

    public function product()
	{
		return $this->belongsTo('App\Product','product_id', 'id');
	}

	public function Order()
	{
	      return $this->belongsTo('App\Order','order_id', 'id');
	}
}
