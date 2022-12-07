@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')


    <h2>{{ $id }}</h2>

  <h2>{{ $round }}</h2>
  history page
@endsection


{{-- to do:
* show data from selected game based on ID
*add winner to home page
*figure out how to redirect to ID unique page
*add syling 
*clean up code
* whatever is required for grad credit
 --}}