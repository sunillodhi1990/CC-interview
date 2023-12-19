<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Order;

class Test7 extends Test
{
    public $description = "return those orders with Order collection where order details are more than two";

    public function run(): Collection
    {
        // * write your code here *

        // ---------------

        $ordersWithMoreThanTwoDetails = Order::has('orderDetails', '>', 2)->get();


        // * Run your code by " php artisan run:test Test7 "
    }
}
