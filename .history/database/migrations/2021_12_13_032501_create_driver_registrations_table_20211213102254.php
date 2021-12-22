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
            $table->bigInteger('driver_pin');
            $table->bigInteger('driver_phone');
            $table->date('driver_regis_date');
            $table->string('email')->unique();
            $table->string('driver_photo');
            
            $table->string('car_brand');
            $table->string('car_model');
            $table->string('car_fuel_type');
            $table->string('car_regis_date');
            $table->string('car_owner_name');
            $table->string('car_owner_address');
            $table->string('car_owner_phone');
            $table->string('car_owner_email');
            $table->string('car_owner_aadhar_no');
            $table->string('car_owner_pan_no');
            $table->string('car_owner_voter_card_no');
            $table->string('car_insurance_company');
            $table->string('car_insurance_expire_date');
            $table->string('car_registration_no');
            $table->string('car_chasis_no');
            $table->string('car_milage_in_km');

            $table->string('driver_image');
            $table->string('driver_aadhar_image');
            $table->string('driver_pan_image');
            $table->string('driver_voter_image');
            $table->string('driver_car_insurance_image');
            $table->string('driver_car_image');
            $table->string('driver_car_blue_book_image');

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
