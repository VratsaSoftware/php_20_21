<?php

class PayDesk
{

    public $products;
    public $total;

    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function showProducts()
    {
        foreach ($this->products as $product) {
            echo $product->getName();
        }
    }

    public function calculateTotalPrice()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getPrice();
        }

        $this->total = $total;
        return $total;
    }

    public function makePayment(iPaymentMethod $paymentMethod)
    {

        $paymentMethod->pay($this->total);
    }
}
