<!DOCTYPE html>
<html lang='en'>
<head>

    <title>P1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>
<body>
    <h1>Rock Paper Scissors Game Simluator</h1>
    <h2>Mechanics</h2>
    <ul>
        <li>Player 1 and Player 2 randomly “throw” either Rock, Paper or Scissors.</li>
        <li>A tie is declared if both players throw the same move.</li>
        <li>Otherwise: Rock beats Scissors, Scissors beats Paper, Paper beats Rock.</li>
    </ul>
    
    <!-- Output the results to page -->
    <h2>Results</h2>
    <ul>
        <li>Player 1 threw <?php echo $player1 ?></li>
        <li>Player 2 threw <?php echo $player2 ?></li>
        <li>Result: <?php echo $winner ?></li>
    </ul>
    
</body>
</html>