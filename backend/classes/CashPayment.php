<?php
require_once 'PaymentMethod.php';

class CashPayment extends PaymentMethod {
    public function pay(float $amount): string
    {
        return "<strong>Payment Successfull.!!</strong> Paid $".$amount."using cash payment method.";
    }
}