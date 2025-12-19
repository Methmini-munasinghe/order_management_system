<?php
require_once 'PaymentMethod.php';

class CardPayment extends PaymentMethod {
    public function pay(float $amount): string
    {
        return "<strong>Payment Successfull.!!</strong> Paid $".$amount."using card payment method.";
    }
}