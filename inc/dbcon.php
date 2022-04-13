<?php
// error handelingen
error_reporting(E_ALL);
ini_set('display_errors', 1);

// database connectie
$host = 'localhost';
$dbname = 'kprfit';
$username = 'root';
$password = '';
$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8","$username","$password");

// pak alles van nieuwsbrief
$exe = $db->prepare("SELECT * FROM `producten`");
$exe->execute();
$producten = $exe->fetchAll(PDO::FETCH_ASSOC);

?>