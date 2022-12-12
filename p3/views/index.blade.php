@extends('templates/master')

@section('title')
    {{ $app->config('app.name') }}
@endsection

@section('head')
 {{ $app->config('app.name') }}
@endsection

@section('content')

	<form method='POST' action= '/rps'>
		<input type='radio' id='rock' name="choice" value="rock" checked><label for="rock">Rock</label>
		<input type='radio' id='paper' name="choice" value="paper"><label for="paper">Paper</label>
		<input type='radio' id='scissors' name="choice" value="scissors"><label for="scissors">Scissors</label>

		<button type="submit">Play</button>
	</form>

<div>
	@isset($p2)
	Player 2 picked: {{$p2}}
	@endisset
</div>
<div>
	@isset($winner)
	Result: {{$winner}}
	@endisset
</div>
	<a href='/games'> See previous games </a>
   
@endsection
