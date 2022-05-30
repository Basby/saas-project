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
        Schema::create('location_plant', function (Blueprint $table) {
            $table->unsignedInteger('plant_id',false)->primary();
            $table->unsignedBigInteger('total_stock',false);
            $table->string('location',32);
            $table->unsignedSmallInteger('minimum_for_order',false);
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
        Schema::dropIfExists('location_plant');
    }
};
