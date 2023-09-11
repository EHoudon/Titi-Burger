<?php
include('Functions\products.php');
include('Functions\prices.php');
include('Templates\header.php');

foreach (getProducts() as $product) {
  if ($_POST['valeursTableau'] == $product['id']) {
    break;
  }
}
// $Quantité = $_POST['howmuch'];
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
      <td class="tdTableau"><?php echo $product['name'] ?></td>
      <td class="tdTableau"><?php echo formatPrice($product['price']) ?></td>
      <td class="tdTableau"><?php echo $_POST['howmuch'] ?></td>
      <td class="tdTableau"><?php echo formatPrice($_POST['howmuch'] * ($product['price'])) ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total HT</td>
      <td class="tdTableau"><?php echo formatPrice(priceExcludingVAT($_POST['howmuch'] * ($product['price']))); ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">TVA</td>
      <td class="tdTableau"><?php echo formatPrice(($_POST['howmuch'] * ($product['price'])) - (priceExcludingVAT($_POST['howmuch'] * ($product['price'])))); ?></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total TTC</td>
      <td class="tdTableau"><?php echo formatPrice($_POST['howmuch'] * ($product['price'])) ?></td>
    </tr>
    <tr>
      <td colspan="3">Choix du transporteur :
        <form action="cart.php" method="post">
          <select name="transporteur">
            <option value="">--Choix transporteur--</option>
            <option value="Deliveroo">Deliveroo</option>
            <option value="UberEats">Uber eats</option>
            <input type="hidden" name="howmuch" id="howmuch" value="<?php echo $_POST['howmuch'] ?>">
          </select>
      </td>
      <td><input type="submit" name="Valider" value="Valider"></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">TRANSPORT</td>
      <td class="tdTableau">
        <?php echo fraisDePort()
        ?>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td class="tdTableau">Total TTC</td>
      <td class="tdTableau"></td>
    </tr>
  </tbody>
</table>

echo formatPrice(5);


<!-- <label for="pet-select">Choose a pet:</label>

<select name="pets" id="pet-select">
  <option value="">--Please choose an option--</option>
  <option value="dog">Dog</option>
  <option value="cat">Cat</option>
  <option value="hamster">Hamster</option>
  <option value="parrot">Parrot</option>
  <option value="spider">Spider</option>
  <option value="goldfish">Goldfish</option>
</select> -->