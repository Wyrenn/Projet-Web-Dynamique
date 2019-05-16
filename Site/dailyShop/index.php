<?php
  session_start();

  if(!isset($_SESSION['Panier'])){
    $_SESSION['Panier'] = array();
  }

  if(!isset($_SESSION['PanierType'])){
    $_SESSION['PanierType'] = array();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>AmazonECE</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  

  </head>
  <body> 
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">          
      <div class="wpf-loader-two-inner">
        <span>Loading</span>
      </div>
    </div>
    <!-- / wpf loader Two -->       
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start language -->
                <div class="aa-language">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <img src="img/flag/french.jpg" alt="english flag">Français
                    </a>
                   
                  </div>
                </div>
                <!-- / language -->

                <!-- start currency -->
                <div class="aa-currency">
                  <div class="dropdown">
                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                      <i class="fa fa-euro"></i>EURO
                      
                    </a>
                    
                  </div>
                </div>
                <!-- / currency -->
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span>0123456789</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.php">Mon compte</a></li>
                  <?php
                    if (isset($_SESSION['Connecté'])){
                      if ($_SESSION['Type'] == "admin"){
                        echo '<li class="hidden-xs"><a href="admin.php">Admin</a></li>';
                      }
                      echo '<li class="hidden-xs"><a href="Deconnexion.php">Déconnecter</a></li>';
                    } else {
                      echo '<li><a href="" data-toggle="modal" data-target="#login-modal">Se connecter</a></li>';
                    }
                  ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Amazon<strong>ECE</strong> <span>Là où tout devient possible</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="cart.php">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">Panier</span>
                 
                </a>

              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="Recherche" placeholder="Le nom de ce que vous recherchez">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Accueil</a></li>
                
              <li><a href="product.php">Catégorie <span class="caret"></span></a>
                <ul class="dropdown-menu">  
                  <li><a href="productLivre.php">Livre</a></li>                                                                
                  <li><a href="productVetement.php">Vêtement</a></li>              
                  <li><a href="productMusique.php">Musique</a></li>
                  <li><a href="productSport.php">Sport et loisir</a></li>
                </ul>
                <?php
                  if(isset($_SESSION['Connecté'])){
                    if ($_SESSION['Type'] == 'admin' || $_SESSION['Type'] == 'vendeur'){
                      echo '<li><a href="productSell.php">Vendre</a></li>';
                    }
                  }
                ?>
                
                
                
              
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->
  <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/bg.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Grand opening</span>                
                <h2 data-seq>AMAZON ECE</h2>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Acheter Maintenant</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="img/slider/bg.jpg" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Réduction de 40% pour la fête de la musique</span>                
                <h2 data-seq>Musiques</h2>                
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">Acheter Maintenant</a>
              </div>
            </li>
            </ul>
             </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Populaire / Ventes Flash</a></li>                
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">

                    <?php

                      $bdd = new mysqli("localhost", "root", "", "amazonece");

                      mysqli_set_charset($bdd, "utf8");

                      $Livre = "SELECT * FROM livres WHERE ID = 1";
                      $Musique = "SELECT * FROM musique WHERE ID = 11";
                      $SportLoisir = "SELECT * FROM `Sport et loisir` WHERE ID = 21";
                      $Vetements = "SELECT * FROM vetements WHERE ID = 31";

                      $ResultatLivre = mysqli_query($bdd, $Livre);
                      $TableauLivre = mysqli_fetch_assoc($ResultatLivre);

                      $ResultatMusique = mysqli_query($bdd, $Musique);
                      $TableauMusique = mysqli_fetch_assoc($ResultatMusique);

                      $ResultatSport = mysqli_query($bdd, $SportLoisir);
                      $TableauSport = mysqli_fetch_assoc($ResultatSport);

                      $ResultatVetements = mysqli_query($bdd, $Vetements);
                      $TableauVetement = mysqli_fetch_assoc($ResultatVetements);

                      echo '<li>
                              <figure>
                                <a class="aa-product-img" href="#"><img width="250" height="300" src="img/photobdd/'. $TableauLivre['photo'] .'" alt="polo shirt img"></a>

                                <form action="AjoutPanier.php" method="post">
                                  <a class="aa-add-card-btn">
                                    <span class="fa fa-shopping-cart"></span>
                                    <input type="hidden" name="Type" value="'. $TableauLivre['categorie'] .'"/>
                                    <input type="hidden" name="Produit" value="'. $TableauLivre['ID'] .'"/>
                                    <input type="submit" style="background:none; border:none;" value="Ajouter au Panier"/>
                                  </a>
                                </form>
                                <figcaption>
                                  <form action="product-detail.php" method="post">
                                    <input type="hidden" name="Produit" value="'. $TableauLivre['ID'] .'"/>
                                    <input type="hidden" name="Type" value="'. $TableauLivre['categorie'] .'"/>
                                    <h4 class="aa-product-title">
                                    <input type="submit" style="background:none; border:none;" value="'. $TableauLivre['nom'] .'"/>
                                    </h4>
                                    </form>
                                  <span class="aa-product-price">'. $TableauLivre['prix'] .'€</span><span class="aa-product-price"></span>
                                </figcaption>
                              </figure>
                            </li>';

                      echo '<li>
                              <figure>
                                <a class="aa-product-img" href="#"><img width="250" height="300" src="img/photobdd/'. $TableauMusique['photo'] .'" alt="polo shirt img"></a>
                                <form action="AjoutPanier.php" method="post">
                                  <a class="aa-add-card-btn">
                                    <span class="fa fa-shopping-cart"></span>
                                    <input type="hidden" name="Type" value="'. $TableauMusique['categorie'] .'"/>
                                    <input type="hidden" name="Produit" value="'. $TableauMusique['ID'] .'"/>
                                    <input type="submit" style="background:none; border:none;" value="Ajouter au Panier"/>
                                  </a>
                                </form>
                                <figcaption>
                                  <form action="product-detail.php" method="post">
                                    <input type="hidden" name="Produit" value="'. $TableauMusique['ID'] .'"/>
                                    <input type="hidden" name="Type" value="'. $TableauMusique['categorie'] .'"/>
                                    <h4 class="aa-product-title">
                                    <input type="submit" style="background:none; border:none;" value="'. $TableauMusique['nom'] .'"/>
                                    </h4>
                                    </form>
                                  <span class="aa-product-price">'. $TableauMusique['prix'] .'€</span><span class="aa-product-price"></span>
                                </figcaption>
                              </figure>
                            </li>';

                      echo '<li>
                              <figure>
                                <a class="aa-product-img" href="#"><img width="250" height="300" src="img/photobdd/'. $TableauSport['photo'] .'" alt="polo shirt img"></a>
                                <form action="AjoutPanier.php" method="post">
                                  <a class="aa-add-card-btn">
                                    <span class="fa fa-shopping-cart"></span>
                                    <input type="hidden" name="Type" value="'. $TableauSport['categorie'] .'"/>
                                    <input type="hidden" name="Produit" value="'. $TableauSport['ID'] .'"/>
                                    <input type="submit" style="background:none; border:none;" value="Ajouter au Panier"/>
                                  </a>
                                </form>
                                <figcaption>
                                  <form action="product-detail.php" method="post">
                                    <input type="hidden" name="Produit" value="'. $TableauSport['ID'] .'"/>
                                    <input type="hidden" name="Type" value="'. $TableauSport['categorie'] .'"/>
                                    <h4 class="aa-product-title">
                                    <input type="submit" style="background:none; border:none;" value="'. $TableauSport['nom'] .'"/>
                                    </h4>
                                    </form>
                                  <span class="aa-product-price">'. $TableauSport['prix'] .'€</span><span class="aa-product-price"></span>
                                </figcaption>
                              </figure>
                            </li>';

                      echo '<li>
                              <figure>
                                <a class="aa-product-img" href="#"><img width="250" height="300" src="img/photobdd/'. $TableauVetement['photo'] .'" alt="polo shirt img"></a>
                                <form action="AjoutPanier.php" method="post">
                                  <a class="aa-add-card-btn">
                                    <span class="fa fa-shopping-cart"></span>
                                    <input type="hidden" name="Type" value="'. $TableauVetement['categorie'] .'"/>
                                    <input type="hidden" name="Produit" value="'. $TableauVetement['ID'] .'"/>
                                    <input type="submit" style="background:none; border:none;" value="Ajouter au Panier"/>
                                  </a>
                                </form>
                                <figcaption>
                                  <form action="product-detail.php" method="post">
                                    <input type="hidden" name="Produit" value="'. $TableauVetement['ID'] .'"/>
                                    <input type="hidden" name="Type" value="'. $TableauVetement['categorie'] .'"/>
                                    <h4 class="aa-product-title">
                                    <input type="submit" style="background:none; border:none;" value="'. $TableauVetement['nom'] .'"/>
                                    </h4>
                                    </form>
                                  <span class="aa-product-price">'. $TableauVetement['prix'] .'€</span><span class="aa-product-price"></span>
                                </figcaption>
                              </figure>
                            </li>';
                    ?>
                  </ul>
                  <a class="aa-browse-btn" href="product.php">Voir tous les produits <span class="fa fa-long-arrow-right"></span></a>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>LIVRAISON GRATUITE</h4>
                <P>Nous livrons en moins de 48h partout en France</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 jours pour échanger </h4>
                <P>Si vous n'êtes pas satisfait, vous avez 30 jours pour tout échanger</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24h/24</h4>
                <P>Nous sommes joignables pour toutes vos questions</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/photo.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Une qualité toujours au top et des produits de plus en plus innovant, c'est avec plaisir que je recommanderais.</p>
                  <div class="aa-testimonial-info">
                    <p>William</p>
                    <span>Etudiant à ECE Paris</span>
                    <a href="https://www.ece.fr/ecole-ingenieur/">Site de l'ECE</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->

  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="https://www.inseec.com/"><img src="img/inseec.png" alt="inseec img"></a></li>
              <li><a href="https://www.ece.fr/ecole-ingenieur/"><img src="img/ece.svg" alt="ece img"></a></li>
              <li><a href="https://php.net/"><img src="img/php.png" alt="php img"></a></li>
              <li><a href="https://www.mysql.com/fr/"><img src="img/mysql.png" alt="mysqk img"></a></li>
              <li><a href="https://openclassrooms.com/fr/"><img src="img/OpenClassrooms.png" alt="openclass img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

  <!-- footer -->  
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Nous Contacter</h3>
                    <address>
                      <p>37 Quai de Grenelle, 75015 Paris</p>
                      <p><span class="fa fa-phone"></span>01 23 45 67 89</p>
                      <p><span class="fa fa-envelope"></span>william.ren@edu.ece.fr</p>
                    </address>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
           
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
 
  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Connexion</h4>
          <form class="aa-login-form" action="Connexion.php" method="post">
            <label for="">Adresse email<span>*</span></label>
            <input type="text" placeholder="Adresse Email" name="email" required>
            <label for="">Mot de Passe<span>*</span></label>
            <input type="password" placeholder="Mot de passe/Pseudo" name="pseudo" required>
            <button class="aa-browse-btn" type="submit">Connexion</button>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>    
    
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script> 

  </body>
</html>