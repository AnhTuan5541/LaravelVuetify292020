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

        foreach(range(1, 100) as $i) {
            $user = User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => '$2y$10$.jH03blGymX4ppw2fzOwr.IHmvG4lxnkNvRsCwqkPTLDuun6TK/kG',
            ]);
        }
    }
}
