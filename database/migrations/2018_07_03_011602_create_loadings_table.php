<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loadings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productionWeek');
            $table->string('carrier');
            $table->date('ETD');
            $table->date('ETA');
            $table->string('voyage_no');
            $table->string('POD');
            $table->string('POL');
            $table->string('status');
            $table->string('year');
            $table->string('vesselName');

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
        Schema::dropIfExists('loadings');
    }
}
