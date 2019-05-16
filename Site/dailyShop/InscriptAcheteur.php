<?php
	session_start();

	///Récupération des variables du formulaire d'ajout
	$pseudo = isset($_POST["pseudo"])?$_POST["pseudo"]:"";
	$email = isset($_POST["email"])?$_POST["email"]:"";
	$mdp = isset($_POST["mdp"])?$_POST["mdp"]:"";
	$nom = isset($_POST["nom"])?$_POST["nom"]:"";
	$prenom = isset($_POST["prenom"])?$_POST["prenom"]:"";
	$adresse = isset($_POST["adresse"])?$_POST["adresse"]:"";
	$ville = isset($_POST["ville"])?$_POST["ville"]:"";
	$cp = isset($_POST["cp"])?$_POST["cp"]:"";
	$pays = isset($_POST["pays"])?$_POST["pays"]:"";
	$numero = isset($_POST["numero"])?$_POST["numero"]:"";


	///Connection à la base de donnée
	$bdd = new mysqli("localhost", "root", "", "amazonece");

	///Vérification parmis la liste des utilisateurs qu'il n'y a pas d'email ou de pseudo doublons
	///Requête de recherche
    $requeteadmin = "SELECT * FROM administrateur WHERE pseudo = '". $pseudo ."' OR email ='". $email ."'";
    $requetevendeur = "SELECT * FROM vendeur WHERE pseudo = '". $pseudo ."' OR email ='". $email ."'";
    $requeteacheteur = "SELECT * FROM acheteur WHERE pseudo = '". $pseudo ."' OR email ='". $email ."'";

    ///Executions des requêtes
    $resultatadmin = mysqli_query($bdd, $requeteadmin);
    $resultatvendeur = mysqli_query($bdd, $requetevendeur);
    $resultatacheteur = mysqli_query($bdd, $requeteacheteur);

    /// Tests des pseudos et emails
    if (! (mysqli_num_rows($resultatadmin) || mysqli_num_rows($resultatvendeur) || mysqli_num_rows($resultatacheteur)) ) {
    	///Ajout de l'utilisateur en question dans la table
		///Requête
		$ajout = mysqli_prepare($bdd, "INSERT INTO Acheteur (pseudo, email, nom, prenom, mdp, adresse, ville, pays, code_postale, numero) VALUES ('$pseudo', '$email', '$nom', '$prenom', '$mdp', '$adresse', '$ville', '$pays', '$cp', '$numero')");

		///Exécution
		mysqli_execute($ajout);

		echo "<script>alert(\"Votre compte a été créé avec succès\")</script>";

		///Connexion et redirection vers l'accueil

		$_SESSION['Connecté'] = TRUE;
		$_SESSION['Pseudo'] = $pseudo;
		$_SESSION['Type'] = "acheteur";
		header('Refresh:0 ; URL=Index.php');

    } else {

    	echo "<script>alert(\"Votre adresse email ou votre pseudo est déjà utilisée\")</script>";
    	header('Refresh:0 ; URL=Inscription.php');

    }

?>