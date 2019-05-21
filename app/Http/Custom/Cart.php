<?php

namespace App\Http\Custom;

class Cart
{
    private $cart;

    public function __construct()
    {
        if (!session('cart')) {
            $this->cart = session('cart');
        } else {
            $this->cart = array();
        }
    }

    public function show()
    {
        return $this->cart;
    }

    public function add($product, $amount)
    {
        $this->cart[$product];
        
        // session('cart') = $this->cart;
    }

    public function remove($product, $amount)
    {

        // session('cart') = $this->cart;
    }

    public function reset()
    {
        $this->cart = [];
        // session('cart') = $this->cart;
    }
}
