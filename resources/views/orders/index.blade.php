@extends('layouts.app')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>User</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{$order->user}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>



@endsection
