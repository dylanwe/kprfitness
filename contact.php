<!DOCTYPE html>
<html lang="nl">
<head>
    <?php include_once('inc/head.php'); ?>
    <link rel="stylesheet" href="css/contact.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | KPR fitness</title>
</head>
<body>
    <?php include_once('inc/nav.php'); ?>

    <main>
        <form action="mail.php" method="post">
            <input type="text" name="name" placeholder="naam">
            <input type="email" name="mail" placeholder="email">
            <textarea name="bericht" cols="30" rows="10" placeholder="bericht..."></textarea>
            <input type="submit" value="verstuur" class="cta-button blue-button">
        </form>
    </main>

    <?php include_once('inc/footer.php'); ?>

    <?php include_once('inc/script.php'); ?>
</body>
</html>