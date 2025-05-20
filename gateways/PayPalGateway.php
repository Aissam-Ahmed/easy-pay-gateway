<?php

require_once(__DIR__ . '/../PaymentGatewayInterface.php');


class PayPalGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): void
    {
        echo "Payment processed via PayPal for the amount of: $amount dollars.<br>";
    }
}
