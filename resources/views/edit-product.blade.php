@section('title')
Edit product
    
@endsection
@extends('master')
@include('navbar')

@section('main')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @if ($errors->any())
            @foreach($errors->all() as $error)

            <p style="color: red">{{$error}}</p>
    
            @endforeach
            @endif

            <form action="{{route('updateProduct',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="text" name="name" value="{{$product->name}}"class="form-control"><br>
                <input type="number" name="price" value="{{$product->price}}"class="form-control"><br>
                <input type="number" name="amount" value="{{$product->amount}}"class="form-control"><br>
                <img src="/ad_images/{{$product->image}}" style="height: 50px;width:50px" alt="Nema slike"><br>
                <input type="hidden" name="oldImg" value="{{$product->image}}"><br>
                <input type="file" name="image" value="{{$product->image}}"class="form-control"><br>
                <button class="btn btn-warning form-control" type="submit" name="update">Update</button>
            </form>
        </div>
    </div>
</div>
    
@endsection