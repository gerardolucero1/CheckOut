<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('hotel_id')->unsigned();
            $table->string('name');
            $table->string('brand');
            $table->string('provider');
            $table->string('cost');
            $table->string('quantityInventory');
            $table->string('quantityRoom');
            $table->string('quantityAlert');
            $table->timestamps();

            //Relations
            $table->foreign('category_id')->references('id')->on('category_inventories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('hotel_id')->references('id')->on('hotels')
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
        Schema::dropIfExists('inventories');
    }
}
