@extends('layouts.app')

@section('content')

    <h1>Order_items  List</h1>
   <a href="{{route('order_items.create')}}" class="btn btn-primary">Add Order_item</a>

    @if(session('success'))
        <div class="alert alert-success">
{{session('success')}}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Order_id</th>
            <th>Menu_item_id</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order_items as $order_item)
         <tr>
             <td>{{$order_item->order->user}}</td>
             <td>{{$order_item->menu_item->name}}</td>
             <td>{{$order_item->quantity}}</td>
             <td>{{$order_item->price}}</td>
<td>
    <a href="{{route('order_items.show',$order_item)}}" class="btn btn-secondary">Show</a>
    <a href="{{route('order_items.edit',$order_item)}}" class="btn btn-warning">Edit</a>
<form action="{{route('order_items.destroy',$order_item)}}" method="post" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
     </td>
         </tr>
        @endforeach
        </tbody>
    </table>
@endsection
