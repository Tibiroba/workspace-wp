<?php include ('controls.php'); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  
 
  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $descricao;?>">
  <meta name="author" content="<?php echo $autor?>">
  <title><?php the_title();?></title>
  <meta name="googlebot" content="index,follow">
  <meta name="theme-color" content="#111111"/>
  <meta name="robots" content="index,follow">
  <meta name="keywords" content="<?php echo $meta_keys?>">
  <meta property="publisher" content="<?php echo $publicante?>"><meta property="og:type" content="website"  >
  <meta property="og:locale" content="pt_BR">
  <meta property="og:region" content="Brasil">
  <meta property="og:site_name" content="<?php echo $nome_site?>">

  <?php wp_head(); ?>
</head>
<body>

<div class="container-fluid">
  <div class="row">
  <div class="col-12" style="border-bottom:1px solid grey; text-align:center; background-color:#888888;">
      <span>Frete Grátis nas compras acima de R$149,00</span>
      </div>
    </div>
    <div class="row row-logo-search">
      <div class="col-12 col-sm-3 col-md-3">
        
    <a href=""><img class="logo-topo" src="<?php echo get_stylesheet_directory_uri();?>/src/img/logo.jpg" alt="logo"></a>
    
      
 </div>
    <div class="col-6 col-sm-6 col-md-6">
      <nav class="topnav" id="myTopnav">
  <a href="#news">Para eles  <i class="fa fa-male"></i></a>
  <a href="#contact">Para elas  <i class="fa fa-female"></i></a>
  <a href="#about">Ofertas!</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

    
    </div>
   

    <div class="col-6 col-sm-6 col-md-3">
    
    <ul class="shop-menu">
    
    <li class="shop-menu-itn"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
    <li><a href="#"><i class="fa fa-heart"></i></a></li>
    <li> <button class="openBtn" onclick="openSearch()"><i class="fa fa-search" style="color:white;"></i></button>
    </li>

    </ul>
    <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">x</span>
  <div class="overlay-content">
    <form action="action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
 
      </div>
 
    </div>
            
 
      </div>
  </div>
</div>
 
