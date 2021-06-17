@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('categoryCreate')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
        </div>
        <div class="form-group">
            <label  for="exampleInputPassword1">Descritpion</label>
            <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Descirtion">
        </div>
        <div class="form-group">
            <label  for="exampleInputPassword1">Max Product Quantity</label>
            <input name="max_product_quantity" type="text" class="form-control" id="exampleInputPassword1" placeholder="Max Product Quantity">
        </div>
        <div class="form-group">
            <label  for="exampleInputPassword1">Image Url</label>
            <input name="image_url" type="text" class="form-control" id="exampleInputPassword1" placeholder="Image Url">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
