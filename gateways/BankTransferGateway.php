<?php

require_once(__DIR__ . "/../PaymentGatewayInterface.php");

class BankTransferGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): void
    {
        echo "Payment processed via bank transfer for the amount of: $amount dollars.<br>";
    }
}
