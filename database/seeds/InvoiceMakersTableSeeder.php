<?php

use Illuminate\Database\Seeder;

class InvoiceMakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('invoicemakers')->insert([
       	'name' => 'Michael Michael',
    	'email' => 'michael28591@gmail.com',
    	'street' => '4270 Ave Linton',
    	'phone' => '5147437866',
    	'suite' => '1',
    	'city' => 'Montreal',
    	'province' => 'Quebec',
    	'zip' => 'H3S1T6',
    	'country' => 'Canada',
       ]);
    }
}
