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
<<<<<<< HEAD
            $table->boolean('isActive') ->default(false);
=======
>>>>>>> parent of 0532eef... Update 2014_10_12_000000_create_users_table.php
            $table->string('name');
            $table->integer('cuit')->unique();
            $table->string('razon_social');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('password');
            $table->string('direccion');
            $table->string('email');
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
