@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('head')
<img class='icon' src="/images/rps.png"/>
<h1 class = 'name'>  {{ $app->config('app.name') }} </h1> 
@endsection

@section('content')

	<form method='POST' action= '/rps'>
		<input type='radio' id='rock' name="choice" value="rock" checked><label for="rock">Rock</label>
		<input type='radio' id='paper' name="choice" value="paper"><label for="paper">Paper</label>
		<input type='radio' id='scissors' name="choice" value="scissors"><label for="scissors">Scissors</label>

		<button class = 'btn' type="submit">Play</button>
	</form>

<div>
	@isset($p2)
	Player 2 picked: <small class = 'results'>{{$p2}}</small>
	@endisset
</div>
<div>
	@isset($winner)
	Result: <small class = 'results'>{{$winner}} </small>
	@endisset
</div>
	<a class = 'redirect' href='/games'> See previous games </a>
   
@endsection
