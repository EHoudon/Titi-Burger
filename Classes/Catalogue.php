<?php


class Catalogue
{

    public array $items = [];


    public function getItems()
    {
        return $this->items;
    }

    public function __construct($db)
    {

        $products = getProducts($db);

        foreach ($products as $product) {
            $this->items[] = new Item(
                $product['id'],
                $product['name'],
                $product['description'],
                $product['price'],
                $product['imageUrl'],
                $product['weight'],
                $product['stock'],
                $product['available'],
                $product['categorieId'],
            );
        }
    }
}

function displayCatalogue(Catalogue $catalogue) {
    foreach ($catalogue->items as $item) {
        displayItem($item);
    }
}