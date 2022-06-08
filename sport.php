<br><br><br><br>
<?php
//inclure la page de connexion
include_once "connexion.php";
//requête pour afficher la liste des employés
$req = mysqli_query($con, "SELECT * FROM Article WHERE categorie = 1");
if (mysqli_num_rows($req) == 0) {
    //s'il n'existe pas d'employé dans la base de donné , alors on affiche ce message :
    echo "Il n'y a pas encore d'articles ajouter !";
} else {
    //si non , affichons la liste de tous les employés
    while ($row = mysqli_fetch_assoc($req)) {
?>
        <tr>
            <td>
                <h3><?= $row['titre'] ?></h3>
            </td>
            <td><?= $row['contenu'] ?></td>
            <td>
                <h5>Date de Création : <?= $row['dateCreation'] ?></h5>
            </td>
            <td>
                <h5>Date de Modification : <?= $row['dateModification'] ?></h5>
            </td>
        </tr>
        <hr>
<?php
    }
}
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Mon Site</title>
</head>

<body>
    <nav>
        <ul>
            <li class="logo"><a href="#">Mon MAGASIN</a></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="sport.php">Sport</a></li>
            <li><a href="sante.php">Santé</a></li>
            <li><a href="education.php">Education</a></li>
            <li><a href="politique.php">Politique</a></li>
            <li class="con"><a href="#">Décon</a></li>
            <li class="conn"><a href="#">Conn</a></li>
        </ul>
    </nav>
</body>

</html>