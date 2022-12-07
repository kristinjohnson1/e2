@extends('templates/master')

@section('title')
    Rock Paper Scissors
@endsection

@section('content')

@foreach ($game as $game )

  <a href='/game?id={{$game['id']}}'>
                <ul>
                    <li>
                    {{$game['time']}}
                    </li>
                </ul>
            </a>
@endforeach

<a href='/'> Home </a>
    
@endsection
