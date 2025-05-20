<?php

require_once(__DIR__ ."/../gateways/PayPalGateway.php");
require_once(__DIR__ ."/../gateways/StripeGateway.php");
require_once(__DIR__ ."/../gateways/BankTransferGateway.php");

class PaymentGatewayFactory {
    public static function create($type): PaymentGatewayInterface {
        return match($type) {
            'paypal' => new PayPalGateway(),
            'stripe' => new StripeGateway(),
            'bank'   => new BankTransferGateway(),
            default  => throw new Exception("Unsupported Gateway"),
        };
    }
}
