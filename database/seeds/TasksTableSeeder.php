<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     *
     * Generate a random day for seeding
     *
     * Check and format so it contains two characters
     *
     * This ensures compatibility with the jQuery date picker format
     *
     * @return $day
     */
    public function makeDay()
    {
        $randDay = strval(mt_rand(1, 28));
        
        if (mb_strlen($randDay, "UTF-8") === 1) {
            $day = '0'.$randDay;
            
            return($day);
        
        } else {
            $day = $randDay;
            
            return($day);
        }

        // Possible syntax for allowing for a proper number of days depending on the month
        // Generate a random day.
        // $the30s = [4, 6, 9, 11];
        // $the31s = [1, 3, 5, 7, 8, 10, 12];
        // $day = function makeDay($month)
        // {
        //     if ($month = 2) {
        //         $day = mt_rand(1, 28);
        //         return();
        //
        //     } elseif ($month = 4 | $month = 6 | $month = 9 | $month = 11) {
        //         $day = mt_rand(1, 30);
        //         return();
        //    
        //     } elseif ($month = 1 | $month = 3 | $month = 5 | $month = 7 | $month = 8 | $month = 10 | $month = 12) {
        //         $day = mt_rand(1, 31);
        //         return();
        //     }
        // }
    }

    /**
     *
     * Generate a random month for seeding
     *
     * Check and format so it contains two characters
     *
     * This ensures compatibility with the jQuery date picker format
     *
     * @return $month
     */
    public function makeMonth()
    {
        $randMonth = strval(mt_rand(1, 12));
        
        if (mb_strlen($randMonth, "UTF-8") === 1) {
            $month = '0'.$randMonth;
            
            return($month);
        
        } else {
            $month = $randMonth;
            
            return($month);
        }
    }

    /**
     *
     * Generate a random year for seeding
     *
     * Range is set between 2010 and current year.
     *
     * @return $year
     */
    public function makeYear()
    {
        $year = mt_rand(2010, date("Y"));
        
        return($year);
    }

    /**
     *
     * Generate a random date for seeding
     *
     * @return $date
     */
    public function makeDate()
    {        
        // Call the makeDay() method.
        $day = $this->makeDay();

        // Call the makeMonth() method.
        $month = $this->makeMonth();

        // Call the makeYear() method.
        $year = $this->makeYear();
        
        //Using the m/d/Y format.
        $randomDate = $month."/".$day."/".$year;
        
        return($randomDate);
    }

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
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bacon = $this->makinBacon();
        $date = $this->makeDate();

        DB::table('tasks')->insert([
            'added_by'	 	=> str_random(10),
            'name'		 	=> str_random(10),
            'details' 		=> $bacon,
            'due_date'      => $date,
        ]);
    }
}
