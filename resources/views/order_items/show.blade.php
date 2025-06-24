@extends('layouts.app')

@section('content')

    <h1>Show Order_item</h1>
    <table class="table">
        <tr>
            <td>Order_id</td>
            <td>{{$order_item->order->user}}</td>
        </tr>
        <tr>
            <td>Menu_item_id</td>
            <td>{{$order_item->name}}</td>
        </tr>
        <tr>
            <td>Quantity</td>
            <td>{{$order_item->quantity}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{$order_item->price}}</td>
        </tr>
    </table>
    <a class="btn btn-secondary" href="{{route('order_items.index')}}">Back</a>
@endsection
