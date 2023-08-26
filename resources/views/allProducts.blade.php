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
        @foreach ($all as $single)
        <tr>
            <th scope="row">{{$single->id}}</th>
            <td>{{$single->name}}</td>
            <td>{{$single->price}}</td>
            <td>{{$single->amount}}</td>
            <td>
              <a href="/admin/delete-product/{{$single->id}}" class="badge badge-danger badge-sm">Obrisi</a>
              <a href=""class="badge badge-warning badge-sm">Edituj</a>

            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection