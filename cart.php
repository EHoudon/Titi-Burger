<?php
include('Functions/products.php');
include('Functions/prices.php');
include('Templates/header.php');
// include('Functions/database.php');


$test = null;
foreach (getProducts($db) as $product) {
  if ($_POST['valeursTableau'] == $product['id']) {
    $test = $product;
  }
}
?>


<table>
  <thead>
    <tr>
      <th>Produit</th>
      <th>Prix unitaire</th>
      <th>Quantité</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="tdTableau"><?php echo $test['name'] ?></td>
      <td class="tdTableau"><?php echo formatPrice($test['price']) ?></td>
      <td class="tdTableau"><?php echo $_POST['howmuch'] ?></td>
      <td class="tdTableau"><?php echo formatPrice($_POST['howmuch'] * ($test['price'])) ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total HT</td>
      <td class="tdTableau"><?php echo formatPrice(totalHT($test['price'], $_POST['howmuch'])); ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">TVA</td>
      <td class="tdTableau"><?php echo formatPrice(totalTVA($test['price'])); ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total TTC</td>
      <td class="tdTableau"><?php echo formatPrice(totalTTC($test['price'])) ?></td>
    </tr>
    <tr>
      <td colspan="3">Choix du transporteur :
        <form action="cart.php" method="post">
          <select name="transporteur">
            <option value="">--Choix transporteur--</option>
            <option value="Deliveroo">Deliveroo</option>
            <option value="UberEats">Uber eats</option>
            <input type="hidden" name="howmuch" id="howmuch" value="<?php echo $_POST['howmuch'] ?>">
            <input type="hidden" name="valeursTableau" id="valeursTableau" value="<?= $_POST['valeursTableau'] ?>">
          </select>
      </td>
      <td><input type="submit" name="Valider" value="Valider"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">TRANSPORT</td>
      <td class="tdTableau">
        <?php echo fraisDePort($test['price'])
        ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total TTC</td>
      <td class="tdTableau"><?php echo formatPrice(totalAvecFraisPort($test['price']))
                            ?>
      </td>
    </tr>
  </tbody>
</table>

}