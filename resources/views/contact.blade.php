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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22678.925144857574!2d17.300979585790373!3d44.72235354854545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475e10037ef43d95%3A0x4b930955a9b45eaf!2zxIxlbGluYWM!5e0!3m2!1shr!2sba!4v1691774413647!5m2!1shr!2sba" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
    
@endsection
