@extends('layout')

@section('navbar')    
@endsection

@section('content')
    <div class="jumbotron text-center">
        <h4>{{$title}}</h4>
        <p></p>
    <ul class="list-group">
        <li class="list-group-item">Laravel Framework 8.41.0</li>
        <li class="list-group-item">PHP 7.4.9</li>
        <li class="list-group-item">MySQL 8.0.21</li>
        <li class="list-group-item">Apache 2.4.46</li>
        <li class="list-group-item">Data Admin: PostgreSQL</li>
        <li class="list-group-item">Host: Heroku</li>
    </ul>

    </div>
@endsection
