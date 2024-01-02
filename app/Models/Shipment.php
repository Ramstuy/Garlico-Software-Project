<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'shipment_id',
        'order_id',
        'status'
    ];

    public function getStatusAttribute($value){
        if($value == 'pending'){
            return "Pesanan sedang diproses";
        } else if($value == 'shipped'){
            return "Pesanan dalam perjalanan";
        } else{
            return "Pesanan telah tiba";
        }
    }
    public function order(){
        return $this->belongsTo(Order::class, 'order_id');
    }
}
