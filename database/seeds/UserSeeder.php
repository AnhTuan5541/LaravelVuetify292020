<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $user = User::create([
            'name' => 'Tuan Nguyen',
            'email' => 'anhtuan12296@gmail.com',
            'password' => Hash::make('1234567890'),
        ]);
        foreach(range(1, 100) as $i) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('1234567890'),
            ]);
        }
    }
}
