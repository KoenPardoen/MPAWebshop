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

        if (is_array($cart)) {
            //nu moet je de product informatie uitlezen, want in de cart staat enkel het id 
            foreach ($cart as $item) {
                $product = Product::find($item['id']);
                $product['quantity'] = $item['quantity'];
                $products[] = $product;
            }
        }
        return view("shoppingCart.index", ['products' => $products]);

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function show(ShoppingCart $shoppingCart)
    {
        //
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShoppingCart $shoppingCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ShoppingCart  $shoppingCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShoppingCart $shoppingCart)
    {
        //
    }
}
