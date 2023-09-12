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




function totalHT($prixTTC){
  return priceExcludingVAT($_POST['howmuch'] * $prixTTC);
}


function totalTTC($prixTTC){
    return $prixTTC * $_POST['howmuch'];
}

function totalTVA($prixTTC){
    return ($_POST['howmuch'] * $prixTTC) - (priceExcludingVAT($_POST['howmuch'] * $prixTTC));
}

function fraisDePort($prixTT) {
    if ($_POST['transporteur'] == "") {
        echo null;
      } else if ($_POST['transporteur'] == "Deliveroo") {
        if (totalTTC($prixTT) >= 50) {
          return formatPrice(0);
        } else if (totalTTC($prixTT) <= 15) {
          return formatPrice(5);
        } else {
          return formatPrice(5*0.1);
        }

      }
      else {
        if (totalTTC($prixTT) >= 50) {
          return formatPrice(0);
        } else if (totalTTC($prixTT) <= 15) {
          return formatPrice(10);
        } else {
          return formatPrice(10*0.1);
        }
      }
}

function totalAvecFraisPort ($prixTT) {
  if ($_POST['transporteur'] == "") {
    echo null;
  }
  else {
    return ((fraisDePort($prixTT)+(totalTTC($prixTT))));
  }
}