<?php

use Faker\Factory as Faker;

class BlogsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('blogs')->truncate();
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$blog = Blog::create([
				'title' => $faker->sentence, 
				'body'	=> $faker->paragraph(10), 
				'user_id' => $faker->numberBetween(1, 10)
			]);

			$id = $faker->numberBetween(1, 5);	// # of tags
			$tag = Tag::find($id);				// retrieve a tag

			$blog->tags()->save($tag);	// associate just one tag to a blog

		}

		// Uncomment the below to run the seeder
		// DB::table('blogs')->insert($blogs);
	}

}
