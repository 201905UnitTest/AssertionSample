<?php

namespace AssertionSample;

use DateTime;

class CustomerRepo
{
    public function get()
    {
        $customer = new Customer;
        $customer->id = 1;
        $customer->age = 18;
        $customer->birthday = new DateTime('1990/1/26');

        return $customer;
    }

    public function getAll()
    {
        $customers = [
            [3, 20, new DateTime('1993/1/2')],
            [4, 21, new DateTime('1993/1/3')],
        ];

        return array_map(function ($data) {
            $customer = new Customer();
            $customer->id = $data[0];
            $customer->age = $data[1];
            $customer->birthday = $data[2];

            return $customer;
        }, $customers);
    }

    public function getComposedCustomer()
    {
        $order = new Order();
        $order->id = 19;
        $order->price = 91;

        $customer = new Customer;
        $customer->id = 11;
        $customer->age = 30;
        $customer->birthday = new DateTime('1999/9/9');
        $customer->order = $order;

        return $customer;
    }
}
