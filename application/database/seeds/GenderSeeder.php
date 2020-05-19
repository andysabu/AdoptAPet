<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gender')->insert(
            array(
                [
                'value' => 'Unknown',
                'description' => 'When it is not possible to determinate the gender'
                ],
                [
                'value' => 'Male',
                'description' => ''
                ],
                [
                'value' => 'Female',
                'description' => ''
                ]
            )
        );
    }
}
