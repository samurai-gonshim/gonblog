<?php

use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{

		$faker = Faker::create();

		// Uncomment the below to wipe the table clean before populating
		// DB::table('comments')->truncate();
		foreach(range(1, 20) as $index)
		{

			$comment = Comment::create([
				'comment' => $faker->paragraph(10), 
				'user_id' => $faker->numberBetween(1, 10)
			]);

			$id = $faker->numberBetween(1, 10);	// blog # from 1 to 10
			$blog = Blog::find($id);			// retrieve a blog
			$blog->comments()->save($comment);	// associate comment to a blog
		}

		// Uncomment the below to run the seeder
		// DB::table('comments')->insert($comments);
	}

}
