@extends('master')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="btn btn-info" href="/">Welcome page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-warning btn-sm" href="/about">About <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-danger btn-sm" href="/shop">Shop</a>
        </li>
        
        
      </ul>
      
    </div>
  </nav>