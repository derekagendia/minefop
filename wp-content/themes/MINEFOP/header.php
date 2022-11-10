<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MINEFOP</title>
    <?php wp_head();?>
    
  </head>
  <body>
    

    <div class="page-header">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory');?>/assets/img/242715262_222822269883186_7487174932910845624_n 1 (1).png" style="height:40px; width:auto;"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
          
<?php wp_nav_menu(
    array(

        'theme_location' => 'top_menu',
        'menu' => 'main-menu',
        'container' => 'ul',
        'menu_class' => 'navbar-nav ms-auto mt-2 mt-lg-0',
    )
    );?>

    
              <!-- <ul class="navbar-nav ms-auto mt-2 mt-lg-0" id="main-menu">
                  <li class="nav-item">
                      <a class="nav-link active" href="#" aria-current="page">Acceuil <span class="visually-hidden">(current)</span></a>
                  </li>
                  
                  
                  <li class="nav-item">
                    <a class="nav-link" href="#">Bourses Nationals</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Bourses de Coopreration</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Annonces</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Actualités</a>
                </li>
              </ul> -->