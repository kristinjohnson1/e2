<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/game' =>['AppController','game'],
    '/history'=>['AppController','history'],
    '/contact' =>['AppController', 'contact'],
    '/rps' => ['AppController','rps']
];
