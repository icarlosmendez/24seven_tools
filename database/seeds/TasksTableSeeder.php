<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$format = 'm/d/Y';
        DB::table('tasks')->insert([
            'added_by'	 	=> str_random(10),
            'name'		 	=> str_random(10),
            'details' 		=> str_random(100),
            'due_date' 		=> date($format),
        ]);
    }
}
