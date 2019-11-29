<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubInventoryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_inventory_products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subInventory_id')->unsigned();
            $table->integer('inventory_id')->unsigned();
            $table->integer('amount');
            $table->timestamps();

            //Relations
            $table->foreign('subInventory_id')->references('id')->on('sub_inventories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('inventory_id')->references('id')->on('inventories')
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
        Schema::dropIfExists('sub_inventory_products');
    }
}
