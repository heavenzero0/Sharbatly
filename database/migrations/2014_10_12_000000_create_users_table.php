<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('id_number');

            $table->string('password');            

            $table->string('Fname');
            $table->string('Mname');
            $table->string('Lname');
            
            $table->string('email');
            $table->string('mobile_number');
            $table->string('address');

            $table->string('position');            

            $table->timestamps();

            $table->string('log_ip');

           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
