<?php
	session_start();

	$vendeur = $_SESSION['Pseudo'];

	///Récupération des variables du formulaire d'ajout
	$categorie = isset($_POST["cate"])?$_POST["cate"]:"";
	$nom = isset($_POST["nom"])?$_POST["nom"]:"";
	$photo = isset($_POST["photo"])?$_POST["photo"]:"";
	$descr = isset($_POST["descr"])?$_POST["descr"]:"";
	$video = isset($_POST["video"])?$_POST["video"]:"";
	$prix = isset($_POST["prix"])?$_POST["prix"]:"";

	///Connection à la base de donnée
	$bdd = new mysqli("localhost", "root", "", "amazonece");

	if($categorie != "vetements"){

		///Ajout de l'objet en question dans la table
		///Requête
	    $ajout = mysqli_prepare($bdd, "INSERT INTO `". $categorie ."` (ID, categorie, nom, description, prix, vendeur, photo, video) VALUES (NULL, '$categorie', '$nom', '$descr', '$prix', '$vendeur', '$photo', '$video')");
	    ///Exécution
	    mysqli_execute($ajout);

	} else {

		$sexe = isset($_POST["sexe"])?$_POST["sexe"]:"";
		$taille = isset($_POST["taille"])?$_POST["taille"]:"";
		$couleur = isset($_POST["couleur"])?$_POST["couleur"]:"";

		///Ajout de l'objet en question dans la table
		///Requête
	    $ajout = mysqli_prepare($bdd, "INSERT INTO vetements (ID, categorie, nom, description, prix, vendeur, photo, video, taille, couleur, sexe) VALUES (NULL, '$categorie', '$nom', '$descr', '$prix', '$vendeur', '$photo', '$video', '$'taille', '$couleur', '$sexe')");
	    ///Exécution
	    mysqli_execute($ajout);

	}

?>