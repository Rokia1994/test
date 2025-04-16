<?php
$env = parse_ini_file('.env');

// Informations d'identification
$DB_SERVER = $env['DB_HOST'];
$DB_NAME = $env['DB_NAME'];
$DB_USERNAME = $env['DB_USER'];
$DB_PASSWORD = $env['DB_PASS'];

 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>