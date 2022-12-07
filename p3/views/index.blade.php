@extends('templates/master')

@section('title')
    Rock Paper Scissors
@endsection

@section('content')

{{$message}}
	<h1>Rock Paper Scissors</h1>
	<form method='POST' action= '/rps'>
		<input type='radio' id='rock' name="choice" value="rock" checked><label for="rock">Rock</label>
		<input type='radio' id='paper' name="choice" value="paper"><label for="paper">Paper</label>
		<input type='radio' id='scissors' name="choice" value="scissors"><label for="scissors">Scissors</label>

		<button type="submit">Play</button>
	</form>

   
@endsection