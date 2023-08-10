@section('title')
Welcome page
    
@endsection
@extends('master')
@include('navbar')
@section('main')

    @section('main')
    <h1>This is welcome page!</h1>
    <p>Trenutno vrijeme je {{date("h:i:s")}}</p>
        
    @endsection
@endsection
