<?php
use Classes\Database\Connection;


require 'autoloader.php';


///logique
// Instanciation de "Connection" c'est le new
Sconnexion = new Connection();
//Appel de la methode "preparedQuery"

$products= $connexion->preparedQuery();
///HTML

// Header
require 'header.php';

// Affichage des propriétées du produits
?>
<main class="container">

<h1><?= $product[0] ['name'] ?></h1>
<p><?= $product[0] ['description'] ?></p>

</main> 
<?php




//footer

require 'footer.html';