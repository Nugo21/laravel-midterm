@extends('layouts.app')

@section('content')
    <a href="{{route('categoryCreateView')}}">Create Category</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">In Stock</th>
            <th scope="col">Qunatity<th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->in_stock}}</td>
            <td>{{$product->quantity}}</td>
            <td><button onclick="confirm('Are you relaly wwant to delete this item')">Delete</button></td>
        </tr>

        @endforeach
        </tbody>
    </table>


@endsection
