<?php
namespace Robin\Support\Contracts;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;

interface Sender
{
    /**
     * @param $orders
     * @return Response
     */
    public function orders($orders);

    /**
     * @param  $customers
     * @return Response
     */
    public function customers($customers);

    public function setClient(ClientInterface $client);
}