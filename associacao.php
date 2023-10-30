<?php

class Order
{
    public $orderNumber;
    public $client;

}

class Client
{
    public $name;
    public $address;
}

$client = new Client();
$client->name = "Bob";
$client->address = "123 Main St";

$order = new Order();
$order->orderNumber = 123;
$order->client = $client;

$data = array(
    'orderNumber' => $order->orderNumber,
    'client' => $order->client->name,
    'client_address' => $order->client->address
);

var_dump($data);