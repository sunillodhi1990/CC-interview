<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Employee;

class Test3 extends Test
{
    public $description = "return all those employee's names who had joined between 2020 - 2023";

    // * example: return value  ['John', 'sam']

    public function run(): array
    {
        // * write your code here *

        // ---------------
    	
		$employeesJoinedBetween2020And2023 = Employee::select('employee_name')
		    ->whereYear('join_date', '>=', 2020)
		    ->whereYear('join_date', '<=', 2023)
		    ->get();

// $employeesJoinedBetween2020And2023 now contains the names of employees who joined between 2020 and 2023

        // * Run your code by " php artisan run:test Test3 "
    }
}
