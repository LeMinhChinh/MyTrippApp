<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FeedbackOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_owner', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_acc');
            $table->bigInteger('id_rp');
            $table->string('content',1000);
            $table->integer('emotion')->nullable;
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
