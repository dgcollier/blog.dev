<?php 

	use Faker\Factory as Faker;

	class PostsSeeder extends Seeder 
	{
		public function run()
		{
			$faker = Faker::create();

			for($i=0; $i<50; $i++) {
				$post = new Post();
				$post->title = $faker->catchPhrase;
				$post->sub_title = $faker->bs;
				$post->user_id = User::all()->random(1)->id;
				$post->body = $faker->text;
				$post->img_url = $faker->imageUrl($width = 250, $height = 250);
				$post->save();
			}

		}
	}

?>