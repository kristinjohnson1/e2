<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
</head>
<body>
    <h1>Results</h1>    
    <?php if($haveAnswer==false){?>
        <p>Please enter an answer</p>
   <?php } elseif($correct) { ?>
        <p>You are correct </p>
<?php } else { ?>
    <p>You are incorrect <a href = 'index.php'> please try again</a></p>
<?php }?>
    

</body>
</html>