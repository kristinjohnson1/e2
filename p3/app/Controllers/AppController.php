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

        //figure out how to actually redirect to /
        return $this->app->view('index',['message' => $winner]);
    }

    //show list of all games by date
    public function game()
    {
        $message = 'Game page';

        return $this->app->view('game', [
        'message' => $message
    ]);
    }

    //info for selected game
    public function history()
    {
        $message = 'history';

        return $this->app->view('history', [
            'message' => $message
        ]);
    }
}
