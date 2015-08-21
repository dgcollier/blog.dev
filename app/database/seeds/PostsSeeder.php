<?php 

	use Faker\Factory as Faker;

	class PostsSeeder extends Seeder 
	{
		public function run()
		{
			// Post::truncate();

			$faker = Faker::create();


			for($i=0; $i<100; $i++) {
				$post = new Post();
				$post->title = $faker->catchPhrase;
				$post->sub_title = $faker->bs;
				$post->author = $faker->name;
				$post->body = $faker->text;
				$post->save();
			}

		}
	}

?>