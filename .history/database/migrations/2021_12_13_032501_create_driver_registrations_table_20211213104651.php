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
            $table->bigInteger('driver_phone')->unique();
            $table->date('driver_regis_date');
            $table->string('driver_email')->unique();
            $table->string('driver_aadhar_no')->unique();
            $table->string('driver_pan_no')->unique();
            $table->string('driver_voter_card_no')->unique();
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
