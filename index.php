<?php
    include('Functions/products.php');
    include('Functions/prices.php');
    
   

 include('Templates/header.php'); ?>

    <main class="contain">
        <div class="tousLesBurgers">
            <?php
            foreach (getProducts($db) as $recipe):
            ?>

                <div class="Burgers">
                    <img class="photosBurgers" src=<?php echo $recipe['image'] ; ?> width="240" height="300">
                    <h3>
                         <?php echo $recipe['name']; ?>
                    </h3>
                    <p>
                        <?php echo formatPrice($recipe['price']); ?><br>
                        <?php echo formatPrice(priceExcludingVAT($recipe['price'])); ?><br>
                        <?php echo $recipe['weight']; ?> Grammes
                    </p>
                    <p>
                        <?php echo $recipe['description']; ?>
                    </p>
                    <p>
                        <?php
                        if (($recipe['discount']) != null)
                            echo 'PROMO! -' . $recipe['discount'] . '% soit ' . formatPrice(discountPrice(($recipe['price']), ($recipe['discount']))) . 'leburgay';
                        ?>
                    </p>
                    <form action="cart.php" method="post">
                        Quantité: <input type="number" name="howmuch">
                        <input type="hidden" name="valeursTableau" id="valeursTableau" value="<?php echo $recipe['id'] ?>">
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </main>

    <footer>
        <?php include('Templates/footer.php'); ?>
    </footer>


    