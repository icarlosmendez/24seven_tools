<?php

use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'name_first' 	=> str_random(10),
            'name_last' 	=> str_random(10),
            'cell' 			=> '1234567890',
            'land' 			=> '1234567890',
            'email' 		=> str_random(10).'@seed.com',
            'title' 		=> str_random(10),
            'company' 		=> str_random(10),
            'department' 	=> str_random(10),
        ]);
    }
}
