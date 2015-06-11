<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTopicIdToQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('questions', function(Blueprint $table)
        {
            $table->integer('topic_id')->unsigned()->nullable();

            $table->foreign('topic_id')
                ->references('id')->on('topics')
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
        Schema::table('questions', function(Blueprint $table)
        {
            $table->dropForeign('questions_topic_id_foreign');
            $table->dropColumn('topic_id');
        });
	}
}
