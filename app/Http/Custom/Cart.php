<?php

namespace App\Http\Custom;

use App\Product;

class Cart
{

    public $cartTotalPrice = 0;

    public function show()
    {
        $cart = session('cart',[]);
        if (count($cart)) {
            foreach ($cart as $item) {
                $product = Product::find($item['id']);
                $product['quantity'] = $item['quantity'];
                $product['productTtl'] = $product['amount'] * $product['quantity'];
                $this->cartTotalPrice += $product['productTtl'];
                $products[] = $product;
            }
            return $products;
        } else {
            return[];
        }   
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
                        $cart[$key]['quantity'] += (int)$quantity;
                        if(!($cart[$key]['quantity'] >= 0)){
                            unset($cart[$key]);
                        }
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

    public function remove($id)
    {
        $cart = session('cart');

        if (is_array($cart)) {
            foreach ($cart as $key => $item) {
                if ($item['id'] == $id) {
                    array_splice($cart, $key, 1);
                }
            }
        }
        
        session()->put('cart', $cart);

        if(count($cart) == 0){
            session()->forget('cart');
        }
    }

    public function reset()
    {
         session(['cart' =>[]]);
    }
}