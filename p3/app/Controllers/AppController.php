<?php

namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     * Game will be played in index
     */
    public function index()
    {
        $message = 'test for index';
        return $this->app->view('index', [
            'message' => $message
        ]);
    }

    //Game logic for RPS

    public function rps()
    {
        //users input
        $choice = $this->app->input('choice');
        //Generate comp choice
        $comp = ['rock', 'paper','scissors'][rand(0, 2)]; 

        //how player 1 can win & set winner to player 1
        if ($choice == 'rock' && $comp == 'scissors' ||
            $choice == 'paper' && $comp == 'rock' ||
            $choice == 'scissors' && $comp == 'paper') {
            $winner = "Player 1 wins";
        }
        //if tie, set winner to tie
        elseif ($choice == $comp) {
            $winner = "Tie";
        }
        //else, comp wins
        else {
            $winner = "Player 2 wins";
        }

        # Set up all the variables we need to make a connection
        $host = $this->app->env('DB_HOST');
        $database = $this->app->env('DB_NAME');
        $username = $this->app->env('DB_USERNAME');
        $password = $this->app->env('DB_PASSWORD');

        # DSN (Data Source Name) string
        # contains the information required to connect to the database
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        # Driver-specific connection options
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        $sql = "INSERT INTO game (p1, p2, winner) 
        VALUES (:p1, :p2, :winner)";

        $values = [
            'p1' => $choice,
            'p2' => $comp,
            'winner' => $winner,
        ];
        $statement = $pdo->prepare($sql);
        $statement->execute($values);

        //figure out how to actually redirect to /
        return $this->app->view('index',['message' => $winner]);
    }

    //show list of all games by date
    public function game()
    {
        # Set up all the variables we need to make a connection
        $host = $this->app->env('DB_HOST');
        $database = $this->app->env('DB_NAME');
        $username = $this->app->env('DB_USERNAME');
        $password = $this->app->env('DB_PASSWORD');

        # DSN (Data Source Name) string
        # contains the information required to connect to the database
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8mb4";

        # Driver-specific connection options
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            \PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            # Create a PDO instance representing a connection to a database
            $pdo = new \PDO($dsn, $username, $password, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }

        //pull data from game
        $sql = "SELECT * FROM game";
        //assign to array 
        $data = $pdo->query($sql)->fetchAll(\PDO::FETCH_ASSOC);

        return $this->app->view('game', [
        'game' => $data,
        ]);
    }

    //info for selected game
    public function history()
    {
        $id = $this->app->param('id');
        // if (is_null($id)) {
        //     return $this->app->redirect('/game');
        // }

        $idQuery = $this->app->db()->findByColumn('id', '=', $id);

        if (empty($idQuery)) {
            return $this->app->view('/');
        } else {
            $game = $idQuery[0];
        }

        return $this ->app->view('history', [
            'game'=> $game,
        ]);

    }
}
