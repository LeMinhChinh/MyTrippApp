<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_rp');
            $table->bigInteger('name');
            $table->string('image',1000);
            $table->string('image_1',1000)->nullable();
            $table->string('image_2',1000)->nullable();
            $table->string('image_3',1000)->nullable();
            $table->integer('price');
            $table->integer('adult');
            $table->integer('child');
            $table->tinyInteger('bed');
            $table->tinyInteger('type_bed');
            $table->tinyInteger('smoke');
            $table->tinyInteger('wifi');
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
