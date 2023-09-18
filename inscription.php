<?php 
include('Functions\products.php');
include('Functions\prices.php');
include('Templates\header.php'); 
?>


<form action="connection.php" method="post">
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom" placeholder="Gérard...">
    <br />
    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Dupont...">
    <br />
    <label for="email">Votre e-mail</label>
    <input type="text" id="email" name="email" placeholder="gérard.dupont@gmail.com...">
    <br />
    <label for="adresse">Votre Adresse</label>
    <input type="text" id="adresse" name="adresse" placeholder="3 rue des arbres...">
    <br />
    <label for="postcode">Code postal</label>
    <input type="text" id="postcode" name="postcode" placeholder="38100...">
    <br />
    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville" placeholder="Chicagre...">
    <br />
    <label for="telephone">Téléphone</label>
    <input type="text" id="telephone" name="telephone" placeholder="06...">
    <br />
    <input type="submit" value="s'inscrire" name="inscription">
</form>


<!-- <?php include('Templates\footer.php'); ?> -->