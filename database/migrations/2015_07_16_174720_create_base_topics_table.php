<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('base_topics', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->text('description');
            $table->string('thumbnail');
            $table->boolean('is_published');
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
		Schema::drop('base_topics');
	}

}
