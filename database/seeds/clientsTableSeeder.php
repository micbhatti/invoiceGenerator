<?php

use Illuminate\Database\Seeder;

class clientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Rosz',
           'company' => 'Rosz',
           'email' => 'justin@rosz.com',
           'street' => '6605 Chemin St. Francois',
           'city' => 'St. Laurent',
           'province' => 'Quebec',
           'zip' => 'H4S 1B6',
           'country' => 'Canada',
        ]);
    }
}
