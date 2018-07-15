<?php

namespace Tests\AssertionSample;

use DateTime;
use AssertionSample\Order;
use AssertionSample\Customer;
use PHPUnit\Framework\TestCase;
use AssertionSample\CustomerRepo;

class AssertionSampleTest extends TestCase
{
    private $customerRepo;

    protected function setUp()
    {
        parent::setUp();
        $this->customerRepo = new CustomerRepo();
    }

    /** @test */
    public function compare_customer()
    {
        $actual = $this->customerRepo->get();

        //how to assert customer?
    }

    /** @test */
    public function compare_customer_list()
    {
        $actual = $this->customerRepo->getAll();

        // how to assert customers?
    }

    /** @test */
    public function compare_composed_customer()
    {
        $actual = $this->customerRepo->getComposedCustomer();

        // how to assert composed customer?
    }

    /** @test */
    public function partial_compare_customer_birthday_and_order_price()
    {
        $actual = $this->customerRepo->getComposedCustomer();

        $order = new Order();
        $order->price = 91;

        $expected = new Customer();
        $expected->birthday = new DateTime('1999/9/9');
        $expected->order = $order;

        // how to assert actual is equal to expected?
    }
}
