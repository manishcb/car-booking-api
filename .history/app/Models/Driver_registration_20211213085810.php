<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_registration extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'car_brand',
        'car_model',
        'car_fuel_type',
    ];
    
}
