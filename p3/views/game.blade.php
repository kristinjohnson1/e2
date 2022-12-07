@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')

@foreach ($game as $game )

  <a class='product-link' href='/game?id={{$game['id']}}'>
                <ul>
                    <li>
                    {{$game['time']}}
                    </li>
                </ul>
            </a>

    
@endforeach


    
@endsection
<h1>game</h1>