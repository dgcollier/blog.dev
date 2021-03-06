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

		DB::table('roles')->delete();
		// DB::table('posts')->delete();
		// DB::table('users')->delete();
		// DB::table('tags')->delete();
		// DB::table('post_tag')->delete();

		$this->call('RolesTableSeeder');
		// $this->call('UsersTableSeeder');
		// $this->call('PostsSeeder');
		// $this->call('TagsSeeder');
		// $this->call('PostTagSeeder');

	}

}
