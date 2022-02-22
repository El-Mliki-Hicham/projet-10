<?php

include "GestionEmployes.php";
$gestionEmployes = new GestionEmployes();

if(isset($_GET['id'])){
    $employe = $gestionEmployes->RechercherParId($_GET['id']);
}

if(isset($_POST['modifier'])){
    $id = $_POST['id'];
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $dateNaissance = $_POST['Date_de_naissance'];
    $gestionEmployes->Modifier($id,$nom,$prenom,$date_de_naissance);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modifier : </title>
</head>
<body>

<h1>Modification de l'employé : <?=$employe->getNom() ?></h1>
<form method="post" action="">
    <input type="text" required="required" 
        id="Id" name="Id"   
        value=<?php echo $employe->getId()?> >

    <div>
        <label for="Nom">Nom</label>
        <input type="text" required="required" 
        id="Nom" name="Nom"  placeholder="Nom" 
        value=<?php echo $employe->getNom()?> >
    </div>
    <div>
        <label for="Prenom">Prénom</label>
        <input type="text" required="required" 
        id="Prenom" name="Prenom" placeholder="Prénom"
        value=<?php echo $employe->getPrenom()?>>
    </div>
    <div>
        <label for="Date_de_naissance">Date de naissance</label>
        <input type="date" required="required"  
        id="Date_de_naissance"  name="Date_de_naissance" placeholder="Date de naissance"
        value=<?php echo $employe->getDate_de_naissance()?>>
    </div>
    <div>
        <input name="modifier" type="submit" value="Modifier">
        <a href="index.php">Annuler</a>
    </div>
</form>
</body>
</html>