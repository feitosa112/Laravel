@section('title')
Welcome page
    
@endsection
@extends('master')
@include('navbar')
@section('main')

    @section('main')
    <h1>This is welcome page!</h1>
    <p>Trenutno vrijeme je {{$trenutnoVrijeme}}</p>
        
    @endsection
@endsection
