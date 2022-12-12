@extends('templates/master')

@section('title')
     {{ $app->config('app.name') }}
@endsection

@section('head')
<img class='icon' src="/images/rps.png"/>
<h1 class = 'name'> Previous Games </h1> 
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

<a class = "redirect"  href='/'> Home </a>
    
@endsection
