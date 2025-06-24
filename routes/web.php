<?php


use App\Http\Controllers\Menu_itemController;
use App\Http\Controllers\Order_itemController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('order_items',Order_itemController::class);

Route::resource('orders',OrderController::class);

Route::resource('menu_items',Menu_itemController::class);
