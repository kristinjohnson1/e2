<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $message = 'test for index';
        return $this->app->view('index', [
            'message' => $message
        ]);
    }

    public function game()
    {
        $message = 'Game page';

        return $this->app->view('game', [
        'message' => $message
    ]);
    }

    public function history()
    {
        $message = 'history';

        return $this->app->view('history', [
            'message' => $message
        ]);
    }
}
