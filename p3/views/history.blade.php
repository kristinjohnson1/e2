@extends('templates/master')

@section('title')
   Round {{$game['id'] }}
@endsection

@section('head')
<img class='icon' src="/images/rps.png"/>
<h1 class = 'name'> Game History</h1>
@endsection

@section('content')
   <div class = 'history'>
      <h3>Round: <small class ='results'>{{$game['id'] }}</small></h3>
      <h3>Player 1: <small class ='results'>{{ $game['p1'] }}</small></h3>
      <h3>Player 2: <small class ='results'>{{ $game['p2'] }}</small></h3>
      <h3>Winner: <small class ='results'>{{ $game['winner'] }}</small></h3>
   </div>
 	<a class = "redirect" href='/games'> See previous games </a>
  
@endsection