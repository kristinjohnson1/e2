<?php

namespace App\Controllers;

class RoundController extends Controller
{
    public function index(){

     $id = $this->app->param('id');

       $round = $this->app->db()->findByColumn('game' ,'id', '=', $id);
    
       if (empty($round)) {
           return $this->app->view('/');
       } else {
           $game = $round[0];
       }

        return $this ->app->view('history',[
            'game'=>$game,
        ]);
    }
    
}