<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residence', function (Blueprint $table) {
            $table->id();
            $table->string('Address');
            $table->string('NumberOfUnit');
            $table->string('SizeUnit');
            $table->string('MonthlyRental');
            $table->string('unitNumber');
            $table->string('Availability');
            $table->string('Bedroom');
            $table->string('Bathroom');
            $table->string('livingRoom');
            $table->string('Garage');
            $table->string('Pool');
            $table->string('Image');
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
        Schema::dropIfExists('residence');
    }
}
