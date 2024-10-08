<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Http\Requests\StorewishlistsRequest;
use App\Http\Requests\UpdatewishlistsRequest;

class WishlistsController extends Controller
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
    public function store(StorewishlistsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wishlist $wishlists)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wishlist $wishlists)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatewishlistsRequest $request, Wishlist $wishlists)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlists)
    {
        //
    }
}
