@extends('main')

@section('title', 'Page Not Found')

@section('main')
    <div class="error-page">
        <h1>404 - Page Not Found</h1>
        <p>Sorry, the page you're looking for doesn't exist.</p>
        <a href="/">Return to homepage</a>
    </div>
@endsection