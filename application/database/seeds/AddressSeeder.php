<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('address')->insert([
                'street' => Str::random(15),
                'street_nbr' => rand(1, 100),
                'house_nbr' => rand(1, 10) . ' ' . Str::random(1),
                'postcode' => rand(0, 9) . '' . rand(0, 9) . '' . rand(0, 9) . '' . rand(0, 9) . '' . rand(0, 9) . '',
                'city' => Str::random(15),                
                'country' => Str::random(15)                
            ]);
        }
    }
}
