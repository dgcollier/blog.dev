<?php

	class UsersTableSeeder extends Seeder 
	{
		public function run()
		{
			User::truncate();

			$user = new User();
			$user->first_name = $_ENV['USER_FIRST_NAME'];
			$user->last_name = $_ENV['USER_LAST_NAME'];
			$user->username = $_ENV['USER_USERNAME'];
			$user->password = $_ENV['USER_PASSWORD'];
			$user->save();
		}
	}