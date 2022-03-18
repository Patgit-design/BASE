<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php
   wp_head();?>
</head>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-md ">
      <div class="container">
        <div class="col-2 text-left pl-md-0">
          <a href="#">
            <img src=" https://dummyimage.com/102x30/007bff/ffffff?text=logo"
              height="30" alt="image">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target=".navbar-collapse-3" aria-controls="navbarNav6"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center col-md-8 navbar-collapse-3">
          <?php
          wp_nav_menu([
   'theme_location' => 'header',
   'container' => false,
   'menu_class' => 'navbar-nav justify-content-center'
])?>
          <!--
          <ul class="navbar-nav justify-content-center">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
        <div
          class="collapse navbar-collapse justify-content-end col-md-2 navbar-collapse-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Log In →</a>
            </li>
          </ul>
        </div>
-->
      </div>
    </nav>

  <div class="container">
  
