<?php

try
{
	$db = new PDO('mysql:host=localhost;dbname=myboutique;charset=utf8', 'new_user', 'Randypatounes');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}



function getProducts($db){
$recipesStatement = $db->prepare('SELECT * FROM products');
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
return $recipes;
}













