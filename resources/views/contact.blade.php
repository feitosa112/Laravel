@section('title')
Contact page
    
@endsection
@extends('master')
@include('navbar')

@section('main')

<h3 class="display-4 text-center">Contact form</h3>
<div class="container">
    <div class="row">
        <div class="col-4 offset-4">
            <form action="">
                <input type="text" name="email" placeholder="Email" class="form-control"><br>
                <input type="text" name="subject" placeholder="Subject" class="form-control"><br>
                <textarea name="message" placeholder="Message"  class="form-control"></textarea><br>
                <button class="btn btn-primary form-control">Send</button>
            </form>
        </div>
    </div>
</div>
    
@endsection
