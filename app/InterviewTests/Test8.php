<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Order;

class Test8 extends Test
{
    public $description = "return the total spending in 2022 on order of customer id 5";

    public function run(): float
    {
        // * write your code here *

        // ---------------
        $customerId = 5;
		$year = 2022;

		$totalSpending = Order::where('customer_id', $customerId)
		    ->whereYear('order_date', $year)
		    ->sum('total_amount');

        // * Run your code by " php artisan run:test Test8 "
    }
}
