<?php

namespace App\Http\Custom;

use App\Product;

class Cart
{

    public function show()
    {

        return session('cart');
    }

    /**
     * Retrieve product from the database and
     * add id and amount to the session
     */
    public function add($id, $quantity=1)
    {
        $cart = session('cart');
        $product = Product::find($id);

        // add's a product or increases quantity       
        if ($product != null) {
            $found = false;
            if (is_array($cart)) {
                foreach ($cart as $key => $item) {
                    if ($item['id'] == $id) {
                        $found = true;
                        $cart[$key]['quantity'] += $quantity;
                    }
                }
            }
            if ($found === false) {
                $cartProduct = array(
                    "id" => $product->id,
                    "quantity" => $quantity
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
