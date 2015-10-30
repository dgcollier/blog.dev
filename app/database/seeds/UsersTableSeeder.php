<?php

	use Faker\Factory as Faker;

	class UsersTableSeeder extends Seeder 
	{
		public function run()
		{
			$user = new User();
			$user->first_name = $_ENV['USER_FIRST_NAME'];
			$user->last_name = $_ENV['USER_LAST_NAME'];
			$user->username = $_ENV['USER_USERNAME'];
			$user->password = $_ENV['USER_PASSWORD'];
			$user->role_id = 1;
			$user->save();

			$faker = Faker::create();

			for($i=0; $i<5; $i++) {
				$user1 = new User();
				$user1->first_name = $faker->firstName;
				$user1->last_name = $faker->lastName;
				$user1->username = $faker->userName;
				$user1->password = $_ENV['USER_PASSWORD'];
				$user1->role_id = 2;
				$user1->save();
			}
		}
	}