<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoluntaryTasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('task')->insert(
                array(
                    [
                        'name' => 'Transportation',
                        'description' => 'Transporting animals to a new home /to clinic from temporary homes, driving to field interventions.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ],
                    [
                        'name' => 'Pre-Adoption Visits',
                        'description' => 'Help in organising Pre-Adoption Visits.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ],
                    [
                        'name' => 'Making Announcements',
                        'description' => 'Making Announcements.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ],
                    [
                        'name' => 'Assistance',
                        'description' => 'Assistance in organizing collections and participating in them.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ],
                    [
                        'name' => 'Photography',
                        'description' => 'Taking photographs of the pets for advertisements.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ],
                    [
                        'name' => 'Hand-made Items',
                        'description' => 'making or obtaining items for auctions from which funds finance our pets.',
                        'start_date' => '2020-05-21',
                        'end_date' => '2020-05-25'

                    ])
            );
        
    }
}

