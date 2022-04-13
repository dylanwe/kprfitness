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
    <link rel="stylesheet" href="css/bestel.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bestel | KPR fitness</title>
</head>
<body>
    <?php include_once('inc/nav.php'); ?>
    <main class="container">
        <h1>Bestellen:</h1>
        <div class="row item">
            
            <?php
            if (!empty($producten)) { ?>
                <div class="col-sm-4 img">
                    <img src="img/<?php print($producten[0]['img']); ?>.jpg" alt="<?php print($producten[0]['id']); ?>">
                </div>
                <section class="col-sm-8">
                    <h2><?php print($producten[0]['name']); ?></h2>
                    <p><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $producten[0]['price'])));?></p>
                    <a href="producten.php">X</a>
                </section>

                <form action="">
                    <!-- info
                        Volledige naam
                        Geslacht
                        Lengte
                        Leeftijd
                        Gewicht
                        Intensiteit werk ( 5 keuze menu met laag naar hoge intensiteit)
                        Adres
                        Postcode
                        Woonplaats
                        E-mail
                        telefoonnummer
                    -->
                    <input type="text" name="naam" placeholder="Volledige naam">
                    <select name="geslacht">
                        <option value="man">Man</option>
                        <option value="vrouw">Vrouw</option>
                        <option value="anders">Anders</option>
                    </select>
                    <input type="number" name="" placeholder="Lengte">
                    <input type="number" name="" placeholder="Leeftijd">
                    <input type="text" name="" placeholder="Gewicht in kg">
                    <select name="">
                        <!-- nog 2 meer -->
                        <option value="zwaar">zwaar</option>
                        <option value="gemiddeld">gemiddeld</option>
                        <option value="weinig">weinig</option>
                    </select>
                    <input type="text" name="" placeholder="Adres">
                    <input type="text" name="" placeholder="Postcode">
                    <input type="text" name="" placeholder="Woonplaats">
                    <input type="mail" name="" placeholder="E-mail">
                    <input type="text" name="" placeholder="telefoonnummer">
                </form>


            <?php } else {
                header('Location: 404.php');
            }
            ?>
                
            
        </div>
    </main>

    <?php include_once('inc/footer.php'); ?>

    <?php include_once('inc/script.php'); ?>
</body>
</html>