<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitPricingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_pricings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('unit_id')->index()->unsigned();
            $table->double('price');
            $table->integer('invoice_id')->index()->unsigned();
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('invoice_id')->references('id')->on('invoices');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unit_pricings');
    }
}
