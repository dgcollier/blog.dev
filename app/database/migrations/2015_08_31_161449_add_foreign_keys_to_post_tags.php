<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToPostTags extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::table('post_tag', function(Blueprint $table)
		{
			$table->integer('post_id')->unsigned();
			$table->foreign('post_id')->references('id')->on('posts');
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('tags');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('post_tag', function(Blueprint $table)
		{
			$table->dropForeign('post_tag_post_id_foreign');
			$table->dropColumn('post_id');

			$table->dropForeign('post_tag_tag_id_foreign');
			$table->dropColumn('tag_id');		
		});
	}

}
