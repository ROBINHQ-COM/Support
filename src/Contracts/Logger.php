<?php


namespace Robin\Support\Contracts;


use Robin\Api\Models\Customer;
use Robin\Api\Models\Order;

interface Logger
{
    public function info($string);

    public function customerMakeError(Customer $customer, $reason, $primitive);

    public function customerSendError(Customer $customer, $statusCode, $primitive);

    public function orderMakeError(Order $customer, $reason, $primitive);

    public function orderSendError(Order $customer, $statusCode, $primitive);
}