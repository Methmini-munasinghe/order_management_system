<?php

class Order
{
    //defining the array
    private $products = array();
    // adding product to the order
    public function addProduct(Product $product)
    {
        $this->products [] = $product;
    }

    public function getTotalPrice()
    {
        $totalPrice = 0;
        $count = count($this->products);
        for ($i = 0; $i < $count; $i++) {
            $totalPrice += $this->products[$i]->getPrice();
        }
        return $totalPrice;
    }

        public function getOrderSummary()
    {
        $output = "<strong>Oder Summary : </strong><br>";
        $count = count($this->products);
        for($i = 0; $i < $count; $i++){
            $product = $this->products[$i];
            $output .= $product->getname() ."  ="
                .$product->getPrice() . "<br>";
        }
        $output .= "<br><strong> Your Total Price : $ " .$this->getTotalPrice() ."</strong>";
        return $output;



    }
}
