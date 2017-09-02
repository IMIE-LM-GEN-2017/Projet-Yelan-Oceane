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
            $table->string('lastname')->nullable();
            $table->string('firstname')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('description')->nullable();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('description')->nullable();
            $table->string('adressname')->nullable();
            $table->string('pc')->nullable();
            $table->string('city')->nullable();
            $table->string('department')->nullable();
            $table->string('region')->nullable();
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
