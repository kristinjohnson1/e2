<?php

require 'Catalog.php';

//how to use different JSON files within same class/index
// $catalogCambridge = new Catalog('cambridge-products.json'); 
// $catalogSomerville = new Catalog('somerville-products.json'); 

$catalog = new Catalog('products.json'); 

$product = $catalog->getById(9);

//reference public properties in class
//var_dump($catalog->products);

//var_dump($catalog->getAll());

var_dump($catalog ->searchByName('Cheerios'));
require 'index-view.php';