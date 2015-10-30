<?php

class RolesTableSeeder extends Seeder {

	public function run()
	{	
		$role = new Role();
		$role->role = 'Admin';
		$role->save();

		$role = new Role();
		$role->role = 'User';
		$role->save();
	}

}