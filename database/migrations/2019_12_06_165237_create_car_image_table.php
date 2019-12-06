<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarImageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
	Schema::create('car_image', function (Blueprint $table) {
	    $table->increments('id');

	    $table->integer('car_id')
		    ->unsigned()
		    ->index();
	    $table->foreign('car_id')
		    ->references('id')
		    ->on('cars')
		    ->onDelete('restrict');
	    $table->integer('image_id')
		    ->unsigned()
		    ->index();
	    $table->foreign('image_id')
		    ->references('id')
		    ->on('images')
		    ->onDelete('restrict');


	    $table->timestamps();
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
	Schema::dropIfExists('car_image');
    }

}
