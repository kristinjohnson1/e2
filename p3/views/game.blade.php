@extends('templates/master')

@section('title')
    {{ $welcome }}
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

<a href='/'> home </a>
    
@endsection
