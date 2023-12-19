<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class Test9 extends Test
{
    public $description = "Delete those order where status is 'DRAFT'";

    public function run(): bool
    {
        // * write your code here *

        // ---------------
        $draftOrders = Order::where('status', 'DRAFT')->get();

		foreach ($draftOrders as $draftOrder) {
		    $draftOrder->delete();
		}

        // * Run your code by " php artisan run:test Test9 "
    }
}