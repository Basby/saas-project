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
        Schema::create('props', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('hormone');
            $table->string('soil_type');
            $table->string('tray_type');
            $table->string('plants_per_tray');
            $table->string('colour_tag');
            $table->string('final_barcode');
            $table->string('greenhouse');
            $table->string('bench_number');
            $table->string('watering_schedule');
            $table->string('hot_bed');
            $table->foreignId('batch_id')->constrained();
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
        Schema::dropIfExists('props');
    }
};
