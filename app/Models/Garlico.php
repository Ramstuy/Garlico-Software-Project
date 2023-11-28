<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garlico extends Model
{
    use HasFactory;
    protected $table = 'garlico';
    protected $fillable = [
        'garlico_id',
        'price',
        'is_available',
        'updated_at'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
