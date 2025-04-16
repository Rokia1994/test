<?php
  require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Ensuite tu peux utiliser $_ENV ou getenv()
/*$conn = mysqli_connect(
    $_ENV['DB_HOST'],
    $_ENV['DB_USER'],
    $_ENV['DB_PASS'],
    $_ENV['DB_NAME']
);*/

//$env = parse_ini_file('.env');

// Informations d'identification define('DB_SERVER', 'localhost');
   
 

define('DB_SERVER' , $_ENV['DB_HOST']);
define('DB_NAME' , $_ENV['DB_NAME']);
define('DB_USERNAME' , $_ENV['DB_USER']);
define('DB_PASSWORD' , $_ENV['DB_PASS'] );
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
