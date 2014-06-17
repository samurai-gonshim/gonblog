<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('tags')->truncate();

		$tags = [
			['tag' => 'Personal'], 
			['tag' => 'Laravel'],
			['tag' => 'PHP'],
			['tag' => 'HTML'], 
			['tag' => 'Google'],
			];

	

		// Uncomment the below to run the seeder
		DB::table('tags')->insert($tags);
	}

}
