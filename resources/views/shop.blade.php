@section('title')
Shop page
    
@endsection
@extends('master')
@include('navbar')
@section('main')

    @section('main')
   
    <h1 class="display-4">All products</h1>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                @foreach ($products as $product)
                    <div class="card" style="background-color:darkcyan">
                        <div class="card-preheader">
                            <img src="ad_images/{{$product->image}}" style="height: 200px;width:349px" alt="">

                        </div>
                        <div class="card-header">
                            <p style="color: darkorange;font-size:22px">
                                @if ($product->name=="iPhone 14" || $product->name=="iPhone 13 pro")
                                    {{$product->name.'-' . 'Super snizenje'}}
                
                                @else
                                    {{$product->name}}
                                @endif
                               
                            </p>
                        </div>
                        <div class="card-body"style="color:white">
                            {{$product->description}}
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success btn-sm">{{$product->price}} KM</button>
                        </div>
                    </div><br>
                @endforeach
            </div>
        </div>
    </div>
        
    @endsection
    
@endsection
