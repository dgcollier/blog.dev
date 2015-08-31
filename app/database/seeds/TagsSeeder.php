<?php 

	use Faker\Factory as Faker;

	class TagsSeeder extends Seeder 
	{
		public function run()
		{
			$faker = Faker::create();

			for($i=0; $i<150; $i++) {
				$tag = new Tag();
				$tag->name = $faker->word;
				$tag->save();
			}

		}
	}

?>