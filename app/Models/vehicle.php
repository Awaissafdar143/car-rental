<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'car_name',
        'car_review',
        'car_type',
        'car_image',
        'car_passenger',
        'car_gate',
        'car_rent',
        'car_luggage',
        'car_fuel_type',
        'car_engine',
        'car_model_year',
        'car_exterior_color',
        'car_interior_color',
        'shortdescription',
        'created_at',
        'updated_at',
    ];
    public function brand(){
        return $this->belongsTo(\App\Models\brand::class,'car_type',"brand_id");
    }
    public function vehicle(){
        return $this->belongsTo(\App\Models\vehicle::class,'car_id');
    }
}

