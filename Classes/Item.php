<?php

class Item
{
    private int $id;
    private string $name;
    private string $description;
    private int $price;
    private string $imageUrl;
    private int $weight;
    private int $stock;
    private string $available;
    private int $categorieId;

    function __construct($id, $name, $description, $price, $imageUrl, $weight, $stock, $available, $categorieId){

        $this -> id = $id;
        $this -> name = $name;
        $this -> description = $description;
        $this -> price = $price;
        $this -> imageUrl = $imageUrl;
        $this -> weight = $weight;
        $this -> stock = $stock;
        $this -> available = $available;
        $this -> categorieId = $categorieId;

    }

    public function getId (){
        return $this-> id;
    }

    public function getName (){
        return $this-> name;
    }

    public function getDescription (){
        return $this-> description;
    }

    public function getPrice (){
        return $this-> price;
    }

    public function getImageUrl (){
        return $this-> imageUrl;
    }

    public function getWeight (){
        return $this-> weight;
    }

    public function getStock (){
        return $this-> stock;
    }

    public function getAvailable (){
        return $this-> available;
    }

    public function getCategorieId (){
        return $this-> categorieId;
    }

    
    

    
}



// echo displayItem($Item);
// $Item = new Item(1, 'Manu', 'lala', 10, 'qsf', 100, 10, 1,01);

// function displayItem($Item){
//     echo $Item->id;
//     echo $Item->description;


// }
