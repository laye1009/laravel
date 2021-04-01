@extends('base')
@section('title'.env('APP_NAME'))
    My Laravel
@endsection

{{-- @endsection ou @stop 
    * si le contenu n'est pas long, on peut mettre: @section('title','My laravel')
    
    
    --}}
@section('content')
    <h1> Hello from Quebec </h1>

    <p> It's currently {{ date('d/m/Y H:i A')}} &middot; <a href="#"> About Us &hearts; </a> </p>

    <footer>&copy; CopyRight 2020 </footer>

@endsection
