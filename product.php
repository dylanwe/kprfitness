<?php
// product info replace later with Database
include_once('inc/dbcon.php');

$product = $_GET['p'];

$exe = $db->prepare("SELECT * FROM `producten` WHERE `id` = '$product'");
$exe->execute();
$producten = $exe->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include_once('inc/head.php'); ?>
    <link rel="stylesheet" href="css/product.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- zet product naam hier -->
    <title>
        <?php 
        if (!empty($producten)) {
            print($producten[0]['name'] . ' | KPR fitness');
        } else {
            header('Location: 404.php');
        }
        
        ?>
    </title>
</head>
<body>
    <?php include_once('inc/nav.php'); ?>

    <main class="container">
        
    <?php 
        // Condition to check array is empty or not 
    if(!empty($producten)) { ?>
        <!-- top section -->
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <!-- img -->
                <img src="img/<?php print($producten[0]['img']); ?>.jpg" alt="<?php print($producten[0]['img']); ?>">
            </div>
            <div class="col-md-12 col-lg-6 headers">
                <!-- naam & prijs & koop knop -->
                <h1><?php print($producten[0]['name']); ?></h1>
                <h2 class="price"><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $producten[0]['price'])));?></h2>
                <a href="bestel.php?p=<?php print($producten[0]['id']); ?>" class="cta-button">Bestel</a>
            </div>
        </div>
        <!-- beschrijving -->
        <div class="row">
            <div class="col-12">
                <h3>Beschrijving:</h3>
                <p><?php print($producten[0]['description']); ?></p>
            </div>
        </div>
        <!-- wat je krijgt & doel -->
        <div class="row">
            <!-- wat je krijgt & doel -->
            <?php 
                if ($producten[0]['get'] != '') { ?>
                    <div class="col-md-6">
                        <h4>Wat krijg je:</h4>
                        <ul><?php print($producten[0]['get']); ?></ul>
                    </div>
                <?php }
            ?>
            <?php 
                if ($producten[0]['goal'] != '') { ?>
                    <div class="col-md-6">
                        <h4>Doel:</h4>
                        <ul><?php print($producten[0]['goal']); ?></ul>
                    </div>
                <?php 
                }
            ?>
        </div>
        <?php
    } else {
        // header('Location: 404.php');
    } 
    
    ?> 
                
    </main>
    

    <?php include_once('inc/footer.php'); ?>

    <?php include_once('inc/script.php'); ?>
</body>
</html>