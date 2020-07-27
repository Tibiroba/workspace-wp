<?php
// Template Name: Front-Page
get_header(); ?>
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/src/img/cta1.jpg')">
          <div class="carousel-caption d-none d-md-block">

  
        
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/src/img/cta2.jpg')">
          <div class="carousel-caption d-none d-md-block">
           
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('<?php echo get_stylesheet_directory_uri();?>/src/img/cta3.jpg')">
          <div class="carousel-caption d-none d-md-block">
          
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
   
</div>
 <div class="container-fluid">
 <div class="row row-menu">
   <div class="col-4">
    <div class="box-inner">
   
      <i class=" fa-big fa-truck"></i>
      <p>Frete Grátis nas compras acima de R$150,00<br>Consulte nossas opções deentrega rápida na região de Jundiaí.</p>
      
    </div>
</div>
<div class="col-4">
<div class="box-inner">
 
      <i class="fa-big fa-handshake-o"></i>
      <p>Compra Garantida<br>Este site é seguro, tenha total segurança em suas compras.</p>
    </div>
</div>
<div class="col-4">
  <div class="box-inner">
      <i class="fa-big fa-users"></i>
      <p>Suporte total ao cliente<br>Nossa equipe está preparada para seu contato</p>
      </div>
</div>
<!-- Body -->
<?php get_footer(); ?>