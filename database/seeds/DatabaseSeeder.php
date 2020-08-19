<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $faker = Faker\Factory::create(); 
        $limit = 20;
        for($i = 0; $i<$limit; $i++){
            DB::table('kontaks')->insert([
                'nama' => $faker->name,
                'email' => $faker->unique()->email,
                'nohp' => $faker->phoneNumber,
                'alamat' => $faker->address,
            ]);
        }
    }
}
