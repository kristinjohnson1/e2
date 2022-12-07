<?php

namespace App\Commands;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seedGames();
    }

    public function migrate()
    {
        $this->app->db()->createTable('game', [
            'time' => 'TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP',
            'p1' => 'varchar(255)',
            'p2' => 'varchar(255)',
            'winner' => 'varchar(255)'
        ]);

        dump("table created");
    }

    public function seedGames(){
         # Set up a game
         $game = [
            'p1' => 'rock',
            'p2' => 'paper',
            'winner' => 'player2', 
        ];

        # Insert the game
        $this->app->db()->insert('game', $game);
        dump('Data entered');
    }
}


// create table `game`(
//     `id` int not null auto_increment,
//     `time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
//     `p1` varchar(255) not null,
//     `p2` varchar(255) not null,
//     `winner` varchar(255) not null,
//     PRIMARY KEY (`id`)
// ); 

// insert into game (p1,p2,winner) values ('rock','paper','player2');
//insert into game (p1,p2,winner) values ('rock','rock','tie');
//insert into game (p1,p2,winner) values ('rock','scissors','player1');