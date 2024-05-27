<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'name',
        'created_at',
        'updated_at',
    ];
    protected $primarykey = "brand_id";
    public function vehicle(){
        return $this->hasMany(\App\Models\vehicle::class,'car_type');
    }
}
