<?php

namespace App\Http\Custom;

use App\Product;

class Cart
{
    public $totalPrice = 0;

    public function show()
    {

        return session('cart');
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }

    /**
     * Retrieve product from the database and
     * add id and amount to the session
     */
    public function add($id, $quantity=1)
    {
        $cart = session('cart');
        $ttlPrice = $this->totalPrice;
        $product = Product::find($id);
        
        if ($product != null) {
            $found = false;
            if (is_array($cart)) {
                foreach ($cart as $key => $item) {
                    if ($item['id'] == $id) {
                        $found = true;
                        $cart[$key]['quantity']++;
                    }
                }
            }
            if ($found === false) {
                $cartProduct = array(
                    "id" => $product->id,
                    "quantity" => $quantity,
                    $this->totalPrice => $product->amount
                );
               
                $cart[] = $cartProduct;
            } 
        }
        session()->put('cart', $cart);
        return view("shoppingCart.index");
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
