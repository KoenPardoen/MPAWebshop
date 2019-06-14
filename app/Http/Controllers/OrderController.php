<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Auth;
use App\Product;
use App\OrderProduct;
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
        if (Auth::check())
        { 
            $user = Auth::user();
            $products = $this->cart->show();
            $cartTotalPrice = $this->cart->cartTotalPrice;
            
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
        $user = Auth::user();
        $products = $this->cart->show();
        $cartTotalPrice = $this->cart->cartTotalPrice;

        $order = new Order();
        $order->user_id = $user->id;
        $order->total_price = 0;
        $order->save();

        foreach($products as $product) {
            $orderProduct = new OrderProduct();
            $orderProduct->order_id = $order->id;

            $orderProduct->product_id = $product->id;
            $orderProduct->quantity = $product->quantity;
            $orderProduct->total_price = $product->productTtl;
            $order->total_price += $orderProduct->total_price;
            $orderProduct->save();
        }
        $order->save();
        $this->cart->reset();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
