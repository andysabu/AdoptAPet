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
        $this->call(AnimalTypeSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(BreedSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(AnimalSeeder::class);  
        $this->call(RoleSeeder::class);         
        $this->call(VoluntaryTasksSeeder::class);  

    }
}


