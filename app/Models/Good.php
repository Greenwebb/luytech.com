<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'size',
        'qty',
        'weight',
        'packaging',
        'source',
        'status',
        'cost',
        'consignment_id'
    ];

    public function Consignment(){
        return $this->belongsTo(Consignment::class,'consignment_id');
    }
}
