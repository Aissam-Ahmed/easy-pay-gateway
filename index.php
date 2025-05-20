<?php  

require_once 'factories/PaymentGatewayFactory.php';

$gatewayType = $_GET['method'] ?? 'paypal';
$amount = 150.00;

try {
    $paymentGateway = PaymentGatewayFactory::create($gatewayType);
    $paymentGateway->processPayment($amount);
} catch (Exception $e) {
    echo "Error : " . $e->getMessage();
}

