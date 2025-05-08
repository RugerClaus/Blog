@extends('main')
@section('title','Games')

@section("main")
<h1>Games:</h1>
<section class="games">
    <h1>Snow Blitz:</h1>
    <a href="/games/snowblitz">
        <img src="{{asset('images/snowblitz_menu.png')}}" alt="Image Link to Snow Blitz page">
    </a>
    <caption>Click image to visit game page</caption>
    <article>This is a game created using Pygame and mostly code generated rectangles</article>
    
</section>

@endsection