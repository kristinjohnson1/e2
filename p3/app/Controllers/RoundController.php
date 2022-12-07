<?php

namespace App\Controllers;

class RoundController extends Controller
{
    public function index(){
        // $message = 'test';
        // return $this->app->view('index', [
        //     'message' => $message
        // ]);
    
        // $round = $this->app->db()->all('id');
        // dd($round);

        // return $this->app->view('history',['id'=> $round]);

     $id = $this->app->param('id');
    //     //dd($id);
    //     if(is_null($id)){
    //         return $this->app->redirect('/games');
    //     }


       $round = $this->app->db()->findByColumn('game' ,'id', '=', $id);
    
    //     // if(empty($roundQuery)){
    //     //     dump ('s');
    //     //    // return $this->app->view('errors/missingProduct');
    //     // }else{
    //     //     $round = $roundQuery[0];
       // }

        return $this ->app->view('history',[
            'id'=>$id,

        ]);
    }
    
}