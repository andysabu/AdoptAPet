<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_VE'); 

        for ($i = 1; $i < 11; $i++) {
            DB::table('animal')->insert([
                'name' => $faker->name,
                'arrival_date' => date(date("Y-m-d")),
                'description' => $faker->text($maxNbChars = 150),
                'isDisabled' => random_int(0, 1),
                'animal_type_id' => rand(1, 3),
                'gender_id' => rand(1, 3),
                'breed_id' => rand(1, 500),
                'address_id' => rand(1, 10)
            ]);
        }
    }
}
