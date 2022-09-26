<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarOptionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_optional', function (Blueprint $table) {
            
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');

            $table->foreignId('optional_id')->references('id')->on('optionals')->onDelete('cascade');
            
            $table->primary(['car_id','optional_id']);

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
        Schema::dropIfExists('car_optional');
    }
}
