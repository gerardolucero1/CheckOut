<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('subInventory_id')->unsigned();
            $table->string('name');
            $table->integer('rooms');
            $table->timestamps();

            //Relations
            $table->foreign('hotel_id')->references('id')->on('hotels')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('subInventory_id')->references('id')->on('sub_inventories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floors');
    }
}
