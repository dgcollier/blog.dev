<?php 

	use Faker\Factory as Faker;

	class PostTagsSeeder extends Seeder 
	{
		public function run()
		{
			for($i=0; $i<300; $i++) {
				$postTag = new PostTag();
				$postTag->post_id = Post::all()->random(1)->id;
				$postTag->tag_id = Tag::all()->random(1)->id;
				$postTag->save();
			}

		}
	}

?>