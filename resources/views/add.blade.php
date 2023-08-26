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
            @foreach($errors->all() as $error)

            <p>{{$error}}</p>
    
            @endforeach
            <form action="/add-product" method="POST" enctype="multipart/form-data">
                @if ($errors->any())
                        
                <p>{{$errors->first()}}</p>
                    
                @endif
                @csrf
                <input type="text" class="form-control" name="name" placeholder="Name"><br>
                <input type="number"class="form-control" name="amount" placeholder="Amount"><br>
                <input type="number"class="form-control" name="price" placeholder="Price"><br>
                <input type="file" name="image" class="form-control"><br>
                <textarea name="description" id="" cols="30" rows="10"class="form-control" placeholder="Description"></textarea><br>
                <button class="btn btn-success form-control" name="saveProduct" type="submit">Save</button>
            </form>
            
        </div>
    </div>
</div>
    
@endsection