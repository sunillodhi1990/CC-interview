<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Employee;

class Test1 extends Test
{
    // public $description = "return the name of the employee from the employees table who is receiving the second highest salary";
    public $description = "return the name of the employee from the employees table who is receiving the second highest salary";

    // * example: return value "john"

    public function run():string
    {
        // * write your code here *

        // ---------------

        // * Run your code by " php artisan run:test Test1 "

        $secondHighestSalaryEmployee = Employee::orderBy('salary', 'desc')
									    ->skip(1)
									    ->take(1)
									    ->value('employee_name');



    }
}
