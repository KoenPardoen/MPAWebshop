<?php

namespace App\Http\Custom;

class Cart
{
    private $cart = array();
    
    public function __construct()
    {
        if (session('cart')) {
            $this->cart = session('cart');
        }
    }

    public function show()
    {
        $itemsCart = $request->session()->all();
        return $this->cart;
    }
    /**
     * Retrieve product from the database and
     * add id, product and price to the session
     */
    public function add($id, $quantity)
    {
        $product = Product::find($id);

        if ($product != null) {
            $cartProduct = array(
                "id" => $product->id,
                "quantity" => $quantity
                // "product" => $product->name,
                // "price" => $product->amount
            );
        } else {

        }
      
        $this->cart[$id];
        
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
