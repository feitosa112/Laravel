@section('title')
Edit contact
    
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

            <form action="{{route('updateContact',['id'=>$contact->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$contact->id}}">
                <input type="text" value="{{$contact->email}}" name="email" class="form-control"><br>
                <input type="text" value="{{$contact->subject}}" name="subject" class="form-control"><br>
                <textarea name="message"  id="" cols="30" rows="10" class="form-control">{{$contact->message}}</textarea>

                <button class="btn btn-warning form-control" type="submit" name="update">Update</button>
            </form>
        </div>
    </div>
</div>
    
@endsection