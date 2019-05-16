<?php
	session_start();

	if (isset($_SESSION['Connecté'])){

		$Produit = isset($_POST["Produit"])?$_POST["Produit"]:"";
		$Categorie = isset($_POST["Type"])?$_POST["Type"]:"";

		array_push($_SESSION['Panier'], $Produit);
		array_push($_SESSION['PanierType'], $Categorie);

		header('Refresh:0 ; URL=cart.php');

	} else {
		echo "<script>alert(\"Veuillez vous connecter avant de faire vos courses.\")</script>";
		header('Refresh:0 ; URL=account.php');

	}


?>