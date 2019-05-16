<?php
	session_start();

	///Récupération des variables du formulaire de connexion
	$pseudo = isset($_POST["pseudo"])?$_POST["pseudo"]:"";
	$email = isset($_POST["email"])?$_POST["email"]:"";

	///Connection à la base de donnée
	$bdd = new mysqli("localhost", "root", "", "amazonece");

	///Vérification parmis la liste des utilisateurs
	///Requête de recherche
    $requeteadmin = "SELECT * FROM administrateur WHERE pseudo = '". $pseudo ."' AND email ='". $email ."'";
    $requetevendeur = "SELECT * FROM vendeur WHERE pseudo = '". $pseudo ."' AND email ='". $email ."'";
    $requeteacheteur = "SELECT * FROM acheteur WHERE mdp = '". $pseudo ."' AND email ='". $email ."'";

    $Resultatadmin = mysqli_query($bdd, $requeteadmin);
    $Resultatvendeur = mysqli_query($bdd, $requetevendeur);
    $Resultatacheteur = mysqli_query($bdd, $requeteacheteur);

	///Distinction entre la connexion d'un admin, d'un vendeur ou d'un acheteur
	///Connexion d'un admin
	if(mysqli_num_rows($Resultatadmin)){

		$_SESSION['Connecté'] = TRUE;
		$_SESSION['Pseudo'] = $pseudo;
		$_SESSION['Type'] = "admin";
		header('Refresh:0 ; URL=Index.php');

	///Connexion d'un vendeur
	} elseif (mysqli_num_rows($Resultatvendeur)) {

		$_SESSION['Connecté'] = TRUE;
		$_SESSION['Pseudo'] = $pseudo;
		$_SESSION['Type'] = "vendeur";
		header('Refresh:0 ; URL=Index.php');

	///Connexion d'un acheteur
	} elseif (mysqli_num_rows($Resultatacheteur)) {
		$Info = mysqli_fetch_assoc($Resultatacheteur);
		$_SESSION['Connecté'] = TRUE;
		$_SESSION['Pseudo'] = $Info['pseudo']; ///Equivaut au pseudo pour les vendeurs et les admins
		$_SESSION['Type'] = "acheteur";
		header('Refresh:0 ; URL=Index.php');

	///Pseudo ou adresse email incorrecte
	} else {

		echo "<script>alert(\"L'adresse email ou le pseudo est incorrecte\")</script>";
		header('Refresh:0 ; URL=Index.php');

	}

?>