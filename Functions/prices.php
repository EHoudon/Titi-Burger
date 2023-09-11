<?php

include('multidimensional-catalog.php');


function formatPrice(float $prix): string
{
    return number_format($prix, 2, ',', ' ') . ' € ';
}


function priceExcludingVAT($prix)
{
    return (100*$prix)/(100+20);
}

function discountPrice($prix,$discount)
{
    return $prix *(1-($discount/100));
}

// function totalTTC($prixTTC){
//     return $prixTTC * $_POST['howmuch'];
// }

// function totalTVA($prixTTC){
//     return ($_POST['howmuch'] * $prixTTC) - (priceExcludingVAT($_POST['howmuch'] * $prixTTC));
// }

function fraisDePort() {
    if ($_POST['transporteur'] == "") {
        echo null;
      } else if ($_POST['transporteur'] == "Deliveroo") {
        return formatPrice(5);
      }
      else {
        return formatPrice(10);
      }
}