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
            $table->string('name');

            $table->string('family_name');
            $table->string('functionbureau')->nullable();

            $table->string('pole')->nullable();
            $table->string('functionpole')->nullable();

            $table->string('department')->nullable();
            $table->string('functiondept')->nullable();

            $table->integer('start_year')->nullable();
            $table->boolean('active')->nullable();




            $table->string('email')->unique();
            $table->string('password');
            $table->string('dehashedpassword');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
