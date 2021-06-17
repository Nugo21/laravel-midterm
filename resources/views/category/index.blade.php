@extends('layouts.app')

@section('content')
    <a href="{{route('categoryCreateView')}}">Create Category</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Category Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td><a href="{{route('productCategory',$category->id)}}">{{$category->name}}</a></td>
            <td><button onclick="confirm('Are you relaly wwant to delete this item')">Delete</button></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
