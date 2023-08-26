@if ($message = Session::get('delete'))
<div class="col-4 offset-8">
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
</div>
   
@endif

@if ($message = Session::get('deleteProduct'))
<div class="col-4 offset-8">
    <div class="alert alert-danger" role="alert">
        {{$message}}
      </div>
</div>
   
@endif

@if ($message = Session::get('createProduct'))
<div class="col-4 offset-8">
    <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
</div>
   
@endif

@if ($message = Session::get('sendMsg'))
<div class="col-4 offset-8">
    <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
</div>
   
@endif

@if ($message = Session::get('update'))
<div class="col-4 offset-8">
    <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
</div>
   
@endif

@if ($message = Session::get('updateContact'))
<div class="col-4 offset-8">
    <div class="alert alert-success" role="alert">
        {{$message}}
      </div>
</div>
   
@endif