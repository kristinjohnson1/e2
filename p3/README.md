# Project 3
+ By: Kristin Johnson
+ URL: http://e2p3.kmjohnson.me

## Game planning 
+ Create an array with possible moves, 3 elements : rock, paper, scissors
+ For both players, use a random number generator (0-2) to assign a value from array 
+ Create an empty string for winner
+ Compare Player1 and Player2, if player one is rock and Player2 is scissors, or Player1 is paper and Player2 is rock or Player1 is scissors and Player2 is paper, Player1 is the winner
+ If Player1 and Player2 are the same value, it is a tie
+ Otherwise, Player2 is the winner
+ Output the results to the page : Player1's throw, Player2's throw and the result

## How to play
+ Player 1 selects from 3 radio buttons either rock, paper or scissors
+ Once the 'Play' button is clicked, Player 2 (the computer) makes their selection using a random number generator
+ Player 2's selection and the round winner is printed to the page
+ Previous games can be found using the link on the homepage
+ On the game page, a list of all games are displayed based off when they were played
+ The game's data,round number,player 1's selection, player 2's selection and the winner, are shown


## Outside resources
+ https://www.php.net/manual/en/pdostatement.fetchall.php
+ https://www.php.net/manual/en/pdostatement.fetchcolumn.php
+ https://www.php.net/manual/en/pdostatement.fetch.php
+ https://stackoverflow.com/questions/43702915/php-pdo-use-variable-assignment-as-fetch-statement
+ https://www.mysqltutorial.org/mysql-timestamp.aspx#:~:text=The%20MySQL%20TIMESTAMP%20is%20a,%3A14%3A07'%20UTC%20.
+ https://dev.mysql.com/doc/refman/8.0/en/timestamp-initialization.html
+ https://freesvg.org/rock-paper-scissors

Notes for instructor
+ Testing for P3 is located in HistoryPageCest.php
+ For the date/time, it is in UTC, not EST, I couldn't fully figure out how to change the time zone
