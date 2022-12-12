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
        $p1 = $this->app->input('choice');
        //Generate comp choice
        $p2 = ['rock', 'paper','scissors'][rand(0, 2)];


        //how player 1 can win & set winner to player 1
        if ($p1 == 'rock' && $p2 == 'scissors' ||
            $p1 == 'paper' && $p2 == 'rock' ||
            $p1 == 'scissors' && $p2 == 'paper') {
            $winner = "Player 1 wins";
        }
        //if tie, set winner to tie
        elseif ($p1 == $p2) {
            $winner = "Tie";
        }
        //else, comp wins
        else {
            $winner = "Player 2 wins";
        }

        $values = [
            'p1' => $p1,
            'p2' => $p2,
            'winner' => $winner,
        ];
        $this->app->db()->insert('game', $values);

        $this->app->view('index', ['winner' => $winner, 'p2' => $p2]);
    }

    //show list of all games by date
    public function game()
    {
        //pull data from game
        $sql = "SELECT * FROM game";
        //assign to array
        $data=  $this->app->db()->run($sql)->fetchAll(\PDO::FETCH_ASSOC);
        return $this->app->view('game', [
        'game' => $data,
        ]);
    }
}
