@section('title')
Welcome page
    
@endsection
@extends('master')
@include('navbar')
@section('main')

    @section('main')
    <h1>This is welcome page!</h1>
    <p>Trenutno vrijeme je {{$trenutnoVrijeme}}</p>
    <h1 class="display-4">Latest products(6)</h1> 
    <div class="container">
        <div class="row">
            <div class="col-4 offset-1">
                @foreach ($latestProducts as $product)
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
            <div class="col-4 offset-1">
                <h4 class="display-4">Contact us</h4>
                <form action="/send-contact" method="POST">
                    @if ($errors->any())
                        
                    <p>{{$errors->first()}}</p>
                        
                    @endif
                    @csrf
                    <input type="text" name="email" class="form-control" placeholder="Email"><br>
                    <input type="text" name="subject" class="form-control"placeholder="Subject"><br>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Message"></textarea><br>
                    <button class="btn btn-primary form-control" name="save" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div> 
    @endsection
@endsection
