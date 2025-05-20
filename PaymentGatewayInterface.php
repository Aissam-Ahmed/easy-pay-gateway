<?php 
    
interface PaymentGatewayInterface {
    public function processPayment(float $amount): void;
}