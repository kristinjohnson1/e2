@extends('templates/master')

@section('title')
    {{ $welcome }}
@endsection

@section('content')

    <h2>{{ $message }}</h2>

  <h2>{{ $message }}</h2>
@endsection


{{-- to do:
* show data from selected game based on ID
*figure out how to redirect to ID unique page
*add syling 
*clean up code
 --}}