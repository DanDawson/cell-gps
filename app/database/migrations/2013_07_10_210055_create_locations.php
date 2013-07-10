<?php

use Illuminate\Database\Migrations\Migration;

class CreateLocations extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Create locations table
		Schema::create('locations', function($table){
			$table->increments('id');
			$table->integer('phone_id');
			$table->string('lcoation', 64);
			$table->float('altitude');
			$table->float('accuracy');
			$table->float('altitudeAccuracy');
			$table->float('heading');
			$table->float('speed');
			$table->timestamp('location_time');
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
		// Drop locations table
		Schema::drop('locations');
	}

}