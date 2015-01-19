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

		$this->call('UserTableSeeder');

		$this->command->info('User table seeded!');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		Eloquent::unguard();
		DB::table('users')->delete();

		User::create(array('name' => 'Big Bird',
											 'email' => 'big.bird@sesamestreet.org'));
		User::create(array('name' => 'Elmo',
											 'email' => 'elmo@sesamestreet.org'));
		User::create(array('name' => 'Cookie Monster',
											 'email' => 'cookie.monster@sesamestreet.org'));

	}

}
