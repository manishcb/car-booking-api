<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver_registration extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
    
        $table->string('driver_name');
            $table->string('driver_address');
            $table->bigInteger('driver_pin');
            $table->bigInteger('driver_phone');
            $table->date('driver_regis_date');
            $table->string('driver_email')->unique();
            $table->string('driver_aadhar_no');
            $table->string('driver_pan_no');
            $table->string('driver_voter_card_no');
            $table->string('driver_image');
            
            $table->string('driver_car_brand')->nullable();
            $table->string('driver_car_model')->nullable();
            $table->string('driver_car_fuel_type')->nullable();
            $table->date('driver_car_regis_date')->nullable();
            
            $table->string('driver_car_insurance_company')->nullable();
            $table->string('driver_car_insurance_expire_date')->nullable();
            $table->string('driver_car_registration_no')->nullable();
            $table->string('driver_car_chasis_no')->nullable();
            $table->integer('driver_car_milage_in_km')->nullable();

            $table->string('driver_aadhar_image');
            $table->string('driver_pan_image');
            $table->string('driver_voter_image');
            $table->string('driver_car_insurance_image')->nullable();
            $table->string('driver_car_image')->nullable();
            $table->string('driver_car_blue_book_image')->nullable();


    ];

}
