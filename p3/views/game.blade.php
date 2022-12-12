@extends('templates/master')

@section('title')
     {{ $app->config('app.name') }}
@endsection

@section('head')
 {{ $app->config('app.name') }}
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
