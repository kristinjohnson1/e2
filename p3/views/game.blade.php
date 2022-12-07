@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')

dump({{$game}});
   @foreach ($game as $game)
        <a class='game' href='/game?id={{ $game['id'] }}'>
        {{$time}}
        </a>
   @endforeach

    
@endsection
<h1>game</h1>