@extends('layouts.app')

@section('content')

    <h1>Add New Order_items</h1>
    @if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach
</ul>
</div>
    @endif

    <form action="{{route('order_items.store')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Order_id</label>
        <input type="number" name="order_id" class="form-control" value="{{old('order_id')}}">
    </div>
        <div class="form-group">
            <label>Menu_item_id</label>
            <input type="number" name="menu_item_id" class="form-control" value="{{old('menu_item_id')}}">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="quantity" class="form-control" value="{{old('quantity')}}">
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" value="{{old('price')}}">
        </div>
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </form>

@endsection
