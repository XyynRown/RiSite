<?php $page = $_GET['page'];?>
<nav id="navbar-secondary" class="navbar navbar-expand-lg bg-black z-1 position-fixed w-100 py-4" style="top: 68.5px;">
  <div class="container-fluid">
    <a href="#" class="navbar-title-games text-white">
      <b><?php 
        switch($page){
          case "mlbb" :
            echo "Mobile Legends : Bang Bang";
            break;
          case "gt" :
            echo "Guardian Tales";
            break;
          case "genshin" :
            echo "Genshin Impact";
            break;
          case "hsr" :
            echo "Honkai : Star Rail";
            break;
          default:
            echo "<div class='container eror404'><h1>404 - Page not found</h1></div>";
            break;
        }
      ?></b>
    </a>

    <!-- Toggler for Offcanvas -->
    <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Offcanvas Navbar Menu -->
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav ms-auto nav-underline">
          <li class="nav-item">
            <a href="#overview" class="nav-link text-white">Overview</a>
          </li>
          <li class="nav-item">
            <a href="#profile" class="nav-link text-white">Profile</a>
          </li>
          <li class="nav-item">
            <a href="#char" class="nav-link text-white">Favorite Character</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
