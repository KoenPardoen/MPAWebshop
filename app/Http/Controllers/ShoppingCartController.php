<?php

namespace App\Http\Controllers;

use App\ShoppingCart;
use App\Product;
use App\Http\Custom\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public $cart;

    public function __construct()
    {
        $this->cart = new Cart();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //session leeg halen
        //$request->session()->flush();
        $cart = $this->cart->show();
        $products = [];
        $cartTotalPrice = 0;

        if (is_array($cart)) {
            //nu moet je de product informatie uitlezen, want in de cart staat enkel het id 
            foreach ($cart as $item) {
                $product = Product::find($item['id']);
                $product['quantity'] = $item['quantity'];
                $product['productTtl'] = $product['amount'] * $product['quantity'];
                $cartTotalPrice += $product['productTtl'];
                $products[] = $product;
            }
        }
        // $product['cartTtl'] += $product['productTtl'];
        return view("shoppingCart.index", ['products' => $products, 'cartTotalPrice' => $cartTotalPrice]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request, $id)
    {
        // var_dump(session('cart'));        
        
        $this->cart->add($id);
        
        return redirect()->route('shoppingcart.index');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->cart->add($request->id, $request->quantity, $request->productTtl);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("shoppingCart.index");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->cart->remove($id);
        
        return redirect()->route('shoppingcart.index');
    }
}
