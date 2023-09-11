<?php
    include('multidimensional-catalog.php');
    include('my-functions.php');
    ?>

    <?php include('header.php'); ?>

    <main class="contain">
        <div class="tousLesBurgers">
            <?php
            foreach ($products as $product) :
            ?>

                <div class="Burgers">
                    <img class="photosBurgers" src=<?php echo $product['picture_url'] ; ?>>
                    <h3>
                        Burger <?php echo $product['name']; ?>
                    </h3>
                    <p>
                        <?php echo formatPrice($product['price']); ?><br>
                        <?php echo formatPrice(priceExcludingVAT($product['price'])); ?><br>
                        <?php echo $product['weight']; ?> Grammes
                    </p>
                    <p>
                        <?php echo $product['description']; ?>
                    </p>
                    <p>
                        <?php
                        if (($product['discount']) != null)
                            echo 'PROMO! -' . $product['discount'] . '% soit ' . formatPrice(discountPrice(($product['price']), ($product['discount']))) . 'leburgay';
                        ?>
                    </p>
                    <form action="cart.php" method="post">
                        Quantité: <input type="number" name="howmuch">
                        <input type="hidden" name="valeursTableau" id="valeursTableau" value="<?php echo $product['id'] ?>">
                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </main>

    <footer>
        <?php include('footer.php'); ?>
    </footer>