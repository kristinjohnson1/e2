<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    public function contact(){
        return $this->app->view('contact',[
            'email' => 'support@zipfoods.com'
        ]);
    }

    public function about(){
        $message = 'ZipFoods is your one-stop-shop for convenient online grocery shopping in the greater Boston area.';
        return $this->app->view('about',[
            'message' => $message
        ]);
    }
}
