<?php

require_once(__DIR__ . "/../PaymentGatewayInterface.php");

class StripeGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): void
    {
        echo "Payment processed via Stripe for the amount of: $amount dollars.<br>";
    }
}
