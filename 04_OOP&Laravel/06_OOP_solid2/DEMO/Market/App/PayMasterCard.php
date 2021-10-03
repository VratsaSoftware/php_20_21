<?php

class PayMasterCard implements iPaymentMethod
{
    public function pay($sum)
    {
        echo "Payment Done. Paid: $sum via " . __CLASS__;
    }
}
