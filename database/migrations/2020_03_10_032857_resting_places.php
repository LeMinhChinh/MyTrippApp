<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestingPlaces extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resting_places', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_acc');
            $table->integer('type');
            $table->integer('place');
            $table->string('name',100);
            $table->string('address',100);
            $table->string('image',1000);
            $table->string('image_1',1000)->nullable();
            $table->string('image_2',1000)->nullable();
            $table->string('image_3',1000)->nullable();
            $table->tinyInteger('rate');
            $table->tinyInteger('pool');
            $table->tinyInteger('parking');
            $table->string('description',1000)->nullable();
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
