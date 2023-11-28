<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'customer_name',
        'customer_email',
        'customer_address',
        'phone_number'
    ];

    // protected $guarded = [
        
    // ];
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
