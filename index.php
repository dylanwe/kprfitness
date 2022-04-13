<?php

include_once('inc/dbcon.php');
// load a couple of items to fill in dummy info
$item1 = '12_weken_spieropbouw_programma';
$item2 = '12_weken_spieropbouw_programma';
$item3 = '12_weken_spieropbouw_programma';


$exe = $db->prepare("SELECT * FROM `producten` WHERE `id` = '$item1'");
$exe->execute();
$feature1 = $exe->fetchAll(PDO::FETCH_ASSOC);

$exe = $db->prepare("SELECT * FROM `producten` WHERE `id` = '$item2'");
$exe->execute();
$feature2 = $exe->fetchAll(PDO::FETCH_ASSOC);

$exe = $db->prepare("SELECT * FROM `producten` WHERE `id` = '$item3'");
$exe->execute();
$feature3 = $exe->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include_once('inc/head.php'); ?>
    <link rel="stylesheet" href="css/style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KPR fitness</title>
</head>
<body>
    <?php include_once('inc/nav.php'); ?>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <h1>KPR FITNESS</h1>
                    <p>Samen op weg naar jouw droomlichaam!</p>
                    <a href="#items" class="cta-button">Start nu</a>
                </div>
            </div>
        </div>
    </header>

    <a href="#" id="items"></a>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <section>
                        <img src="img/<?php print_r($feature1[0]['img']); ?>.jpg" alt="<?php print_r($feature1[0]['img']); ?>">
                        <h3><?php print_r($feature1[0]['name']); ?></h3>
                        <p><?php print_r($feature1[0]['description']); ?></p>
                        <a href="product.php?p=<?php print_r($feature1[0]['id']); ?>" class="sec-button"><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $feature1[0]['price'])));?></a>
                    </section>
                </div>
                <div class="col-md-12 col-lg-4">
                    <section>
                        <img src="img/<?php print_r($feature2[0]['img']); ?>.jpg" alt="<?php print_r($feature2[0]['img']); ?>">
                        <h3><?php print_r($feature2[0]['name']); ?></h3>
                        <p><?php print_r($feature2[0]['description']); ?></p>
                        <a href="product.php?p=<?php print_r($feature2[0]['id']); ?>" class="sec-button"><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $feature2[0]['price'])));?></a>
                    </section>
                </div>
                <div class="col-md-12 col-lg-4">
                    <section>
                        <img src="img/<?php print_r($feature3[0]['img']); ?>.jpg" alt="<?php print_r($feature3[0]['img']); ?>">
                        <h3><?php print_r($feature3[0]['name']); ?></h3>
                        <p><?php print_r($feature3[0]['description']); ?></p>
                        <a href="product.php?p=<?php print_r($feature3[0]['id']); ?>" class="sec-button"><?php print( '€' . str_replace(",00",",-",str_replace(".",",", $feature3[0]['price'])));?></a>
                    </section>
                </div>
                
            </div>
            <div class="row">
                <a href="producten.php" class="cta-button" id="view">Meer zien</a>
            </div>
        </div>
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="img/wie_ben_ik.jpeg" alt="over_mij" class="img-responsive">
                    </div>
                    <div class="col-sm-6">
                        <h2>Wie ben ik</h2>
                        <p>Je lichaam en je gezondheid is het belangrijkste op deze aarde. Helaas zien de meeste mensen dit niet zo en verwaarlozen zij hun lichaam met troep eten, nauwelijks bewegen en slechte gewoontes…</p>
                        <a href="over_mij.php" class="sec-button">Lees meer</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('inc/footer.php'); ?>

    <?php include_once('inc/script.php'); ?>
</body>
</html>