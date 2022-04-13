<?php 
    include_once('inc/dbcon.php');
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include_once('inc/head.php'); ?>
    <link rel="stylesheet" href="css/producten.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Producten | KPR fitness</title>
</head>
<body>
    <?php include_once('inc/nav.php'); ?>

    <main>
        <div class="container">
            <div class="row">
                <?php
                    foreach ($producten as $key) { ?>
                        <div class="col-md-12 col-lg-4">
                            <section>
                                <img src="img/<?php print_r($key['img']);?>.jpg" alt="item-2">
                                <h3><?php print_r($key['name']);?></h3>
                                <p><?php print_r($key['description']);?></p>
                                <a href="product.php?p=<?php print_r($key['id']);?>" class="cta-button blue-button"><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $key['price'])));?></a>
                            </section>
                        </div>
                        
                    <?php }
                ?>
            </div>
        </div>
    </main>

    <?php include_once('inc/footer.php'); ?>

    <?php include_once('inc/script.php'); ?>
</body>
</html>