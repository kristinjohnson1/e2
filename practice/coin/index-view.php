<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coin Flip</title>
</head>

<body>
	<h1>Coin Flip</h1>

	<form method='POST' action="process.php">

		<input type='radio' id='heads' name="choice" value="heads" <?php echo ($choice == 'heads') ? 'checked' : '';?>
		><label for="heads">Heads</label>
		<input type='radio' id='tails' name="choice" value="tails" <?php echo ($choice == 'tails') ? 'checked' : '';?>><label
			for="tails">Tails</label>

		<button type="submit">Play</button>
	</form>

	<?php if (isset($results)) { ?>
	<h2>Results</h2>

	The coin landed on <?php echo $flip; ?>

	<?php if ($winner) {?>
	You win!
	<?php } else { ?>
	You lost, try again
	<?php }?>

	<?php }?>



</body>

</html>