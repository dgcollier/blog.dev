<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('posts')->delete();
		DB::table('users')->delete();
		DB::table('tags')->delete();
		DB::table('post_tags')->delete();

		$this->call('UsersTableSeeder');
		$this->call('PostsSeeder');
		$this->call('TagsSeeder');
		$this->call('PostTagsSeeder');
	}

}
