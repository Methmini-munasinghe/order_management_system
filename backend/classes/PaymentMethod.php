<?php
abstract class PaymentMethod
{
    public abstract function pay(float $amount): string;




}
