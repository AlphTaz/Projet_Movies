
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Ma liste de films préféré :</h1>

<?php

// Initialiser la connection
$pdo = new PDO('sqlite:BBR.db');

// Créer notre requête SQL
$requete = $pdo->query("SELECT * FROM Films");

// Execution
$resultat = $requete->fetchAll(PDO::FETCH_ASSOC);



// Affichage

// ?><pre><?php
// print_r($resultat);
//   ?></pre><?php

?>
    <ul>
<?php

foreach ($resultat as $films) {
    
    print_r("<li>".$films['Titre']."</li>");    
    print_r($films['Durée']);    
    print_r($films['Realisateur']);    
    print_r($films['Origine']);    
    print_r($films['Type']."</li>");    
};
    ?>
    </ul>
  
</body>
</html>

