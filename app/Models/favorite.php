<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class favorite extends Model
{
    use HasFactory;
    protected $fillable=[
        'car_id',
        'user_id'
    ];

    public function vehicle(){
        return $this->belongsTo(\App\Models\vehicle::class,'car_id');
    }
}
