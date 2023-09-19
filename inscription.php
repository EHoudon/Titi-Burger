<?php include ('Templates\header.php'); ?>
<div class="Burgers">
<form action="pageinscription.php" method="post">
    <label for="nom">Votre nom</label>
    <input type="text" id="nom" name="nom" placeholder="Gérard..." required>
    <br />
    <label for="prenom">Votre prénom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Dupont..." required>
    <br />
    <label for="email">Votre e-mail</label>
    <input type="text" id="email" name="email" placeholder="gérard.dupont@gmail.com..." required>
    <br />
    <label for="adresse">Votre Adresse</label>
    <input type="text" id="adresse" name="adresse" placeholder="3 rue des arbres..." required>
    <br />
    <label for="postcode">Code postal</label>
    <input type="text" id="postcode" name="postcode" placeholder="38100..." required>
    <br />
    <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville" placeholder="Chicagre..." required>
    <br />
    <label for="telephone">Téléphone</label>
    <input type="text" id="telephone" name="telephone" placeholder="06..." required>
    <br />
    <input type="submit" value="sinscrire" name="inscription">
</form>
</div>

<?php include('Templates\footer.php'); ?>
