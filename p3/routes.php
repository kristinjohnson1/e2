<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/games' =>['AppController','game'],
    '/game'=>['RoundController','index'],
    '/rps' => ['AppController','rps']
];
