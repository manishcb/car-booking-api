<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('driver_name');
            $table->string('driver_address');
            $table->string('driver_state');
            $table->string('driver_city');
            $table->bigInteger('driver_pin');
            $table->bigInteger('driver_phone');
            $table->string('driver_photo');
            $table->string('email')->unique();
            

            'car_brand'=>"required",
        'car_model'=>"required",
        'car_fuel_type'=>"required",
        'car_regis_date'=>"required",
        'car_owner_name'=>"required",
        'car_owner_address'=>"required",
        'car_owner_phone'=>"required",
        'car_owner_email'=>"required",
        'car_owner_aadhar_no'=>"required",
        'car_owner_pan_no'=>"required",
        'car_owner_voter_card_no'=>"required",
        'car_insurance_company'=>"required",
        'car_insurance_expire_date'=>"required",
        'car_registration_no'=>"required",
        'car_chasis_no'=>"required",
        'car_milage_in_km'=>"required", 

        'car_owner_image'=>"required", 
        'car_owner_aadhar_image'=>"required", 
        'car_owner_pan_image'=>"required", 
        'car_owner_voter_image'=>"required", 
        'car_owner_insurance_image'=>"required", 
        'car_image'=>"required", 
        'car_blue_book_image'=>"required", 


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_registrations');
    }
}
