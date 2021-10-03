<?php

require('App\iPaymentMethod.php');

class PayCash implements iPaymentMethod
{
    public function pay($sum)
    {
        echo "Payment Done. Paid: $sum via " . __CLASS__;
    }
}
