<?php

require('../vendor/autoload.php');

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("geheim");

// my test product
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00"
    ],
    "description" => "Hallo wereld",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl"  => "https://webshop.example.org/mollie-webhook/",
]);