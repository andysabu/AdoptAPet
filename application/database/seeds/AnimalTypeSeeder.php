<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AnimalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animal_type')->insert(
            array(
                [
                'name' => 'unknown',
                'description' => 'When there is not enough information about the animal'
                ],
                [
                'name' => 'Dog',
                'description' => 'Dogs are domesticated mammals, not natural wild animals'
                ],
                [
                'name' => 'Cat',
                'description' => 'Cats are small, carnivorous (meat-eating) mammals, of the family Felidae. Domestic cats are often called house cats when kept as indoor pets.'
                ]
            )
        );
    }
}
