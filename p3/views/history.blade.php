@extends('templates/master')

@section('title')
   Round {{$game['id'] }}
@endsection

@section('head')
 {{ $app->config('app.name') }}
@endsection

@section('content')

   <h3>Round: {{$game['id'] }}</h3>
   <h3>Player 1: {{ $game['p1'] }}</h3>
   <h3>Player 2: {{ $game['p2'] }}</h3>
   <h3>Winner: {{ $game['winner'] }}</h3>

 	<a href='/games'> See previous games </a>
  
@endsection


{{-- to do:
*add syling 
*clean up code
* whatever is required for grad credit
*validation
 --}}