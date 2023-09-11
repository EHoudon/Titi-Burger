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
