<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Invoice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_acc');
            $table->bigInteger('id_rp');
            $table->bigInteger('id_room');
            $table->string('name',100);
            $table->string('surname',100);
            $table->string('phone');
            $table->string('email');
            $table->tinyInteger('payment');
            $table->date('checkin');
            $table->date('checkout');
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
