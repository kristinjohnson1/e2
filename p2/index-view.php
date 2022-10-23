<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rock Paper Scissors</title>
</head>

<body>
	<h1>Rock Paper Scissors</h1>
	<form method='POST' action="process.php">
		<input type='radio' id='rock' name="choice" value="rock" checked><label for="rock">Rock</label>
		<input type='radio' id='paper' name="choice" value="paper"><label for="paper">Paper</label>
		<input type='radio' id='scissors' name="choice" value="scissors" ><label for="scissors">Scissors</label>

		<button type="submit">Play</button>
	</form>

    <?php if (isset($results)) { ?>
	<h2>Results</h2>
    <ul>
        <li>Player 1 threw <?php echo $choice ?></li>
        <li>Player 2 threw <?php echo $comp ?></li>
        <li>Result: <?php echo $winner ?></li>
    </ul>

	<?php }?>

</body>

</html>