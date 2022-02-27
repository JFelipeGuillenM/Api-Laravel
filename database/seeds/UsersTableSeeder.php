<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**

     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('netireki');

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
