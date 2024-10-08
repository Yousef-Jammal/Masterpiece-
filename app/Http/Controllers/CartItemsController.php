<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Http\Requests\Storecart_itemsRequest;
use App\Http\Requests\Updatecart_itemsRequest;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storecart_itemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItem $cart_items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItem $cart_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatecart_itemsRequest $request, CartItem $cart_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItem $cart_items)
    {
        //
    }
}