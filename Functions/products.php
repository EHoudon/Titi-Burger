<?php
function getProducts() {
  return [
    [
        'id' => 'Burger01',
        'name' => 'Végétarien',
        'price' => 8,
        'picture_url' => 'images\Végétarien.webp',
        'weight' => 400,
        'description' => 'Gluten free!!',
        'discount' => 20,
    ],
    [
        'id' => 'Burger02',
        'name' => 'Bacon',
        'price' => 12,
        'picture_url' => 'images\Bacon.webp',
        'weight' => 420,
        'description' => 'Comme Kevin!',
        'discount' => null,
    ],
    [
        'id' => 'Burger03',
        'name' => 'Double',
        'price' => 14,
        'picture_url' => 'images\Double.webp',
        'weight' => 500,
        'description' => 'Salade, Tomates, Oignons, Chef!',
        'discount' => null,
    ],
    [
        'id' => 'Burger04',
        'name' => 'Cheese',
        'price' => 11,
        'picture_url' => 'images\Cheese.webp',
        'weight' => 450,
        'description' => 'Pour encore plus de dégoulinance..',
        'discount' => 10,
    ],

];
}
