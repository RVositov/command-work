@extends('layouts.app')


@section('content')

    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($menu_items as $menu_item)
            <tr>
                <td>{{$menu_item->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
