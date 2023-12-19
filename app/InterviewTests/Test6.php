<?php

namespace App\InterviewTests;

use App\Modules\Test;
use App\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Order;
use App\Models\OrderDetail;

class Test6 extends Test
{
    public $description = "save the following requestArray Data into orders and order_details table and return the Order object";

    public $requestArray = [
        'customer_id' => 3,
        'status' => 'SUBMITTED',
        'total_selling_price' => 0, // * have to calculate right selling price by the price of the product and quantity of the product
        'payment_method' => 'CASH ON DELIVERY',
        'order_details' => [
            [
                'product_id' => 1,
                'quantity' => 5
            ],
            [
                'product_id' => 7,
                'quantity' => 2
            ]
        ]
    ];

    public function run(): Order
    {
        // * write your code here *

        // ---------------
        $order = Order::create([
                'customer_name' => $requestArray['customer_name'],
                'order_date' => $requestArray['order_date'],
                // Add other fields as needed
            ]);

            // Create the order details
            foreach ($requestArray['order_details'] as $detail) {
                $orderDetail = new OrderDetail([
                    'product_name' => $detail['product_name'],
                    'quantity' => $detail['quantity'],
                    'price' => $detail['price'],
                    // Add other fields as needed
                ]);

                // Associate the order detail with the order
                $order->orderDetails()->save($orderDetail);
            }

            // Reload the order with the associated order details
            $order = $order->load('orderDetails');

            // Now, $order contains the Order object with the associated OrderDetail objects
            return $order;

        // * Run your code by " php artisan run:test Test6 "
    }
}
