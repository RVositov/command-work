<?php

namespace App\Http\Controllers;

use App\Models\Order_item;
use Illuminate\Http\Request;

class Order_itemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $order_items = Order_item::all();
        return view('order_items.index', compact('order_items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    Order_item::create($request->all());
    return redirect()->route('order_items.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order_item $order_item)
    {
        return view('order_items.show', compact('order_item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order_item $order_item)
    {
        return view('order_items.edit', compact('order_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order_item $order_item)
    {
        $order_item->update($request->all());
        return redirect()->route('order_items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order_item $order_item)
    {
        $order_item->delete();
        return redirect()->route('order_items.index');
    }
}
