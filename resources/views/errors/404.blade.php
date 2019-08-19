@extends('layouts.layout', ['title' => "error 404"])

@section('content')
    <div class="card">
        <h2 class="card-header">You look where going! (404 error)</h2>
        <img src="{{ asset('img/404.png') }}" alt="404">
    </div>

    <a href="/" class="btn btn-outline-primary">Main page</a>
@endsection
