<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('floor_id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->enum('status', ['Check Out', 'Stay Over', 'Other', 'Vacancy', 'Pending Review', 'Rush'])->nullable();
            $table->timestamps();

            //Relations
            $table->foreign('floor_id')->references('id')->on('floors')
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
        Schema::dropIfExists('rooms');
    }
}
