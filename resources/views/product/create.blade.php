@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('productCreate')}}">
        @csrf
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Example select</label>
            <select name="category" class="form-control" id="exampleFormControlSelect1">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>s
        </div>
            <div class="form-check">
                <input name="in_stock" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">In Stock</label>
            </div>
        <div class="form-group">
            <label  for="exampleInputPassword1">Quantity</label>
            <input name="quantity" type="text" class="form-control" id="exampleInputPassword1" placeholder="Quantity">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

@endsection
