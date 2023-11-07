<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'car_make',
        'car_model',
        'fuel',
        'transmission',
        'car_year',
        'source',
        'status',
        'consignment_id'
    ];

    public function Consignment(){
        return $this->belongsTo(Consignment::class,'consignment_id');
    }
}
