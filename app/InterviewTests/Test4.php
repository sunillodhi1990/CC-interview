<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;

class Test4 extends Test
{
    public $description = "return Employee Collection where Employee's name started with letter 'a'";

    public function run(): Collection
    {
        // * write your code here *
        
        // ---------------
     
		$employeesWithNamesStartingWithA = Employee::where('employee_name', 'like', 'a%')->get();

// $employeesWithNamesStartingWithA now contains the collection of employees with names starting with 'a'


        // * Run your code by " php artisan run:test Test4 "
    }
}
