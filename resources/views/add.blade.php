@section('title')
Add product
    
@endsection
@extends('master')
@include('navbar')

@section('main')
<h4 class="display-4 text-center">Add product</h4>
<div class="container">
    <div class="row">
        <div class="col-8 offset-2">
            @if ($errors->any())
            @foreach($errors->all() as $error)

            <p style="color: red">{{$error}}</p>
    
            @endforeach
            @endif
            
            <form action="{{route('saveProduct')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control" name="name" value="{{old("name")}}" placeholder="Name"><br>
                <input type="number"class="form-control" name="amount" value="{{old("amount")}}" placeholder="Amount"><br>
                <input type="number"class="form-control" name="price" value="{{old("price")}}" placeholder="Price"><br>
                <input type="file" name="image" value="{{old("image")}}" class="form-control"><br>
                <textarea name="description" value="{{old("description")}}" id="" cols="30" rows="10"class="form-control" placeholder="Description"></textarea><br>
                <button class="btn btn-success form-control" name="saveProduct" type="submit">Save</button>
            </form>
            
        </div>
    </div>
</div>
    
@endsection