<?php
include('Functions/products.php');
include('Functions/prices.php');
include('Templates/header.php');
include('Functions/database.php');

// // Debuggage
// if (isset($_POST['inscription'])){
//     var_dump($_POST);
// }
?>

<div class="Burgers">

    <div class="Bienvenue">
        <?php
        if (isset($_POST['inscription'])) {
            extract($_POST);
            // extract assigne le nom à une variable ici nom, prenom, email...
            // echo $nom;

            $requeteInscription = $db->prepare("INSERT INTO customers VALUES(0, :first_name,:last_name, :email, :adress, :telephone_number, :postcode, :town)");
            $requeteInscription->execute(
                array(
                    "first_name" => $prenom,
                    "last_name" => $nom,
                    "email" => $email,
                    "adress" => $adresse,
                    "telephone_number" => $telephone,
                    "postcode" => $postcode,
                    "town" => $ville,
                )
            );
            $reponse = $requeteInscription->fetchAll();
            // var_dump($reponse);
            echo "Bienvenue $nom $prenom !";
        }
        ?>
    </div>
    <div class="Bienvenue2">
        <a href="pageConnection.php">Se Connecter</a>
    </div>
</div>

<?php include('Templates/footer.php'); ?>