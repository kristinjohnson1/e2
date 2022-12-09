@extends('templates/master')

@section('title')
   Round {{$game['id'] }}
@endsection

@section('content')


    <h2>Round:  {{$game['id'] }}</h2>

  <h2>Player 1: {{ $game['p1'] }}</h2>
  <h2>Player 2: {{ $game['p2'] }}</h2>
  <h2>Winner: {{ $game['winner'] }}</h2>

 	<a href='/games'> See previous games </a>
  
@endsection


{{-- to do:
*add syling 
*clean up code
* whatever is required for grad credit
*validation
 --}}