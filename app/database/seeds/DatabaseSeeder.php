<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// needs to be in this order
		$this->call('UsersTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('BlogsTableSeeder');
		$this->call('CommentsTableSeeder');
	}

}
