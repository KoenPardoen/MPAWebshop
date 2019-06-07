<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Auth;
use App\Product;
use App\Http\Custom\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
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
    public function index()
    {
        $user = Auth::user();
        $cart = $this->cart->show();
        $products = [];
        $cartTotalPrice = 0;

        if (Auth::check())
        {   
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
            return view("orders.index", ['user' => $user, 'products' => $products, 'cartTotalPrice' => $cartTotalPrice]);
        } else {
            return view("layouts.loginError");
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
