<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_registration extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
    
        'driver_name',
        'driver_address',
        'driver_pin',
        'driver_phone',
        'driver_regis_date',
        'driver_email',
        'driver_aadhar_no',
        'driver_pan_no',
        'driver_voter_card_no',
        'driver_image',
            
        'driver_car_brand',
        'driver_car_model',
        'driver_car_fuel_type',
        'driver_car_regis_date',
            
        'driver_car_insurance_company',
        'driver_car_insurance_expire_date',
        'driver_car_registration_no',
        'driver_car_chasis_no',
        'driver_car_milage_in_km',

            'driver_aadhar_image',
            'driver_pan_image',
            'driver_voter_image',
            'driver_car_insurance_image',
            'driver_car_image',
            'driver_car_blue_book_image',


    ];

}
