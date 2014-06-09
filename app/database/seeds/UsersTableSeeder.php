<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			$user = User::create([
				'username' 	=> $faker->username,
				'email' 	=> $faker->email,
				'password' 	=> Hash::make($faker->word)
			]);

			// Just to play around with Faker on profile model to see how it works 
			$user->profile()->create([
				'bio' 		=> 'My name is '.$faker->name,
				'location' 	=> $faker->city.' '.$faker->state,
				'twitter_username'	=> $faker->username,
				'facebook_username'	=> $faker->username,
				'github_username'	=> $faker->username,
			]);
		}
	}

}