<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert(
            array(
                [
                'name' => 'admin',
                'description' => 'People with this role can Add/Update/Delele'
                ],
                [
                'value' => 'foster',
                'description' => 'People who can only adopt/foster/virual pets'
                ]
            )
        );
    }
}
