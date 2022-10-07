<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preview extends Model
{
    protected $table = 'tbl_previews';
    protected $fillable = [
        'comment','user_id', 'product_id','parent'
   ];

    public function user()
    {
           return $this->belongsTo(User::class);
    }

    public function product()
    {
           return $this->belongsTo(Product::class);
    }
}
