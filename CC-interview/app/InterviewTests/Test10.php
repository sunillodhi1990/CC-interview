<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Order;

class Test10 extends Test
{
    public $description = "Find the order with height selling price";

    public function run(): Order
    {
        // * write your code here *

        // ---------------

		$orderWithHighestSellingPrice = Order::orderBy('selling_price', 'desc')->first();
        // * Run your code by " php artisan run:test Test10 "
    }
}
