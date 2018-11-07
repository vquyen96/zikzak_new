<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVirtualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('virtuals', function (Blueprint $table) {
            $table->increments('virtual_id');
            $table->string('virtual_name');
            $table->string('virtual_price');
            $table->tinyInteger('virtual_trade_adr');
            $table->tinyInteger('virtual_regis_adr');
            $table->tinyInteger('virtual_recept');
            $table->string('virtual_work');
            $table->string('virtual_meeting_room');
            $table->tinyInteger('virtual_drink');
            $table->string('virtual_photo');
            $table->tinyInteger('virtual_bill');
            $table->tinyInteger('virtual_sanitary');
            $table->tinyInteger('virtual_guard');
            $table->tinyInteger('virtual_nameboard');
            $table->tinyInteger('virtual_advice');
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
        Schema::dropIfExists('virtuals');
    }
}
