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
    public function add($id, $quantity)
    {
        $cart = session('cart');

        $product = Product::find($id);

        if ($product != null) {
            $cartProduct = array(
                "id" => $product->id,
                "quantity" => $quantity
                // "product" => $product->name,
                // "price" => $product->amount
            );
            $cart[] = $cartProduct;
        } else {

        }

        session()->put('cart', $cart);
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
