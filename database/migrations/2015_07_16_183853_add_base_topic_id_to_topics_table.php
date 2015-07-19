<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddBaseTopicIdToTopicsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('topics', function(Blueprint $table)
		{
            $table->integer('base_topic_id')->unsigned()->nullable();

            $table->foreign('base_topic_id')
                ->references('id')->on('base_topics')
                ->onDelete('set null')
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
		Schema::table('topics', function(Blueprint $table)
		{
            $table->dropForeign('topics_base_topic_id_foreign');
            $table->dropColumn('base_topic_id');
		});
	}

}
