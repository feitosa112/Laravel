@section('title')
AllContact
    
@endsection
@extends('master')
@include('navbar')

@section('main')

<table class="table">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Subject</th>
        <th scope="col">Message</th>
        <th scope="col">Actions</th>        
      </tr>
    </thead>
    <tbody>
        @foreach ($all as $single)
        <tr>
            <th scope="row">{{$single->id}}</th>
            <td>{{$single->email}}</td>
            <td>{{$single->subject}}</td>
            <td>{{$single->message}}</td>
            <td>
              <a href="{{ route('deleteContact', ['contact'=>$single->id]) }}" class="badge badge-danger badge-sm">Obrisi</a>
              <a href="{{route('editContact',['contactId'=>$single->id])}}"class="badge badge-warning badge-sm">Edituj</a>

            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection