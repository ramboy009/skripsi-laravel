<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weights', function (Blueprint $table) {
            // $table->integer('hepatitis_id');
            // $table->integer('hepatitis_id')->references('id')->on('hepatitis');
            // $table->integer('symptomp_id');
            // $table->integer('symptomp_id')->references('id')->on('symptomps');
            $table->foreignId('hepatitis_id')->constrained('hepatitis');
            $table->foreignId('gejala_id')->constrained('gejala');
            $table->float('bobot', 8, 2);
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
        Schema::dropIfExists('weights');
    }
}
