<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_datas', function (Blueprint $table) {
            $table->id();
            $table->text('ip_address')->nullable();
            $table->text('time_visited')->default(0);
            $table->text('cityName')->nullable();
            $table->text('countryName')->nullable();
            $table->text('countryCode')->nullable();
            $table->text('regionCode')->nullable();
            $table->text('regionName')->nullable();
            $table->text('zipCode')->nullable();
            $table->text('latitude')->nullable();
            $table->text('longitude')->nullable();

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
        Schema::dropIfExists('ip_datas');
    }
};
