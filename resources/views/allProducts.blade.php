@section('title')
AllProducts
    
@endsection
@extends('master')
@include('navbar')

@section('main')

<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
        <th>Actions</th>        
      </tr>
    </thead>
    <tbody>
        @foreach ($allProducts as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->amount}}</td>
            <td>
              <a href="/admin/delete-product/{{$product->id}}" class="badge badge-danger badge-sm">Obrisi</a>
              <a href=""class="badge badge-warning badge-sm">Edituj</a>

            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection