<?php
include('multidimensional-catalog.php');

echo $_POST['howmuch'];
// echo $_POST['valeursTableau'] ;


$id = $_POST['valeursTableau'];
foreach($products as $product){
    if( $_POST['valeursTableau'] == $product['id'] ){
            $nom = $product['name'];
            $prix = $product['price'];
            $photo = $product['picture_url'];
            $poids = $product['weight'];
            $texte = $product['description'];
            $reduc = $product['discount'];

            break;
          }
        }
        if( empty($_POST['valeursTableau']) )
          echo 'non trouvé';

          echo $nom;

?>