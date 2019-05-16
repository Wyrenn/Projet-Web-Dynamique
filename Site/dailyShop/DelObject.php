<?php
	
	///Récupération des variables du formulaire d'ajout
	$id = isset($_POST['Produit'])?$_POST["Produit"]:"";
	$categorie = isset($_POST['Type'])?$_POST["Type"]:"";

	///Connection à la base de donnée
	$bdd = new mysqli("localhost", "root", "", "amazonece");

	///Retrait de l'objet en question dans la table
    $suppr = mysqli_prepare($bdd, "DELETE FROM `". $categorie ."` WHERE ID = ". $id ."");

    ///Exécution
    mysqli_execute($suppr);

    header('Refresh:0 ; URL=productSell.php');
?>