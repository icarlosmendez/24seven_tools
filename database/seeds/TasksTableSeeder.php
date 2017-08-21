<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Make the bacon by calling the Bacon Ipsum API.
     *
     * @return $fatback
     */
    public function makinBacon() 
    {
        // Call the Bacon Ipsum API and get some bacon!
        $fatback = file_get_contents('https://baconipsum.com/api/?type=all-meat&sentences=2&start-with-lorem=1');
        // Strip the first two characters off the string which are a " and [
        $fatback = substr_replace($fatback, '', 0, 2);
        // Strip the last two characters off the string which are a ] and "
        $fatback = substr_replace($fatback, '', -2, 2);

        return($fatback);
    }

    /**
     *
     * Generate a random date for seeding
     *
     * @return $date
     */
    public function makeDate()
    {
        echo "inside makeDate method";
        // $the30s = [4, 6, 9, 11];
        // $the31s = [1, 3, 5, 7, 8, 10, 12];

        //Generate a random year using mt_rand.
        $year = mt_rand(2010, date("Y"));
        var_dump($year);
        //Generate a random month.
        $month = mt_rand(1, 12);
        var_dump($month);
        $day = mt_rand(1, 28);
        //Generate a random day.
        // $day = function makeDay($month)
        // {
        //     if ($month = 2) {
        //         $day = mt_rand(1, 28);
        //         return();

        //     } elseif ($month = 4 | $month = 6 | $month = 9 | $month = 11) {
        //         $day = mt_rand(1, 30);
        //         return();
            
        //     } elseif ($month = 1 | $month = 3 | $month = 5 | $month = 7 | $month = 8 | $month = 10 | $month = 12) {
        //         $day = mt_rand(1, 31);
        //         return();
        //     }
        
        // }
        var_dump($day);
        //Using the m/d/Y format.
        $randomDate = $month."/".$day."/".$year;
        var_dump($randomDate);
        return($randomDate);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bacon = $this->makinBacon();
        $date = $this->makeDate();

    	$format = 'm/d/Y';
        DB::table('tasks')->insert([
            'added_by'	 	=> str_random(10),
            'name'		 	=> str_random(10),
            'details' 		=> $bacon,
            // 'due_date' 		=> date($format),
            'due_date'      => $date,
        ]);
    }
}
