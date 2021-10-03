<?php

class PaymentMethod
{


    public function __construct()
    {
    }

    public function pay($sum)
    {
        echo "Payment Done. Paid: $sum via " . __CLASS__;
    }
}
