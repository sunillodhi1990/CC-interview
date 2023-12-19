<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;

class Test2 extends Test
{
    public $description = "return the department name from the departments table that has the most no of employees";

    // * example: return value "Data Science and Analytics"

    public function run(): string
    {
        // * write your code here *

        // ---------------
       $departmentWithMostEmployees = Department::select('departments.department_name')
								    ->join('employees', 'departments.department_id', '=', 'employees.department_id')
								    ->groupBy('departments.department_id', 'departments.department_name')
								    ->orderByRaw('COUNT(employees.employee_id) DESC')
								    ->limit(1)
								    ->value('departments.department_name');

        // * Run your code by " php artisan run:test Test2 "
    }
}
