<?php

class Catalog
{
    #Properties
    public $products = [];


    #Methods
    public function __construct($dataSource)
    { //open up data from json file and convert to array 
        $json = file_get_contents($dataSource);
        $this->products = json_decode($json,true);
       // var_dump($products);
    }

    public function getAll()
    {
        return $this->products;
    }

   public function getById(int $id)
    {
       // var_dump($this->products[$id]);
    }

    public function searchByName(string $term)
    {
        $results = [];
        foreach($this->products as $product){
            if(strstr($product['name'],$term)){
                $results[] = $product;
            }
        }

        return $results;
    }
}
