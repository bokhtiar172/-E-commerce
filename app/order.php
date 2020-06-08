<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cart;
use App\payment;
use App\product;

class order extends Model
{
  protected $fillable=[
'name',
'phone',
'email',
'ip_address',
'user_id',
'payment_id',
'shipping_address',
'message',
'transection_code',
'is_paid',
'is_complate',
  ];
    public function cart(){
      return $this->hasMany(cart::class);
    }

    public function payment(){
      return $this->belongsTo(payment::class);
    }


    public function product(){
      return $this->belongsTo(product::class);
    }
}
