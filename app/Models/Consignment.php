<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_of_vehicles',
        'consignment_type',
        'message',
        'user_id',
        'company_name',
        'terms',
        'status',
        'current_state',
        'price',
        'service_price',
        'other_price'
    ];

    protected static function boot()
    {
        parent::boot();

        static::retrieved(function ($model) {
            if (method_exists($model, 'user')) {
                $model->load('User');
            }
            if (method_exists($model, 'cars')) {
                $model->load('cars');
            }
        });
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cars(){
        return $this->hasMany(Car::class);
    }
}
