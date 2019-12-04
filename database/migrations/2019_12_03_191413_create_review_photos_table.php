<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('revision_id')->unsigned();
            $table->string('photo');
            $table->timestamps();

            //Relations
            $table->foreign('revision_id')->references('id')->on('revisions')
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
        Schema::dropIfExists('review_photos');
    }
}
