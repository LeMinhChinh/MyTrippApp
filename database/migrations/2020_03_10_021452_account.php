<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email',100);
            $table->string('password',100);
            $table->string('name',100);
            $table->string('surname',100);
            $table->string('address',100)->nullable();
            $table->date('age')->nullable();
            $table->string('phone',100)->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('avatar',1000)->nullable();
            $table->tinyInteger('role')->default(0);
            $table->tinyInteger('status')->default(1);
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
        //
    }
}
