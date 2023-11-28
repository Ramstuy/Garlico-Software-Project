<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'quantity_ordered'
    ];

    // protected $guarded = [
        
    // ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    public function garlico(){
        return $this->belongsTo(Garlico::class);
    }
    public function shipments() {
        return $this->hasMany(Shipment::class);
    }
}
