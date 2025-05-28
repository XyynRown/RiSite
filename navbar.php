<?php $current = $_GET['page'] ?? 'home'; ?>

<nav id="navbar" class="navbar navbar-expand-lg bg-light z-2 fixed-top">
  <div class="container-fluid">
    <a href="index.php" class="navbar-title"><b>RiSite</b></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto nav-underline">
        <li class="nav-item">
          <a href="index.php?page=home" class="nav-link <?= $current === 'home' ? 'active' : '' ?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= in_array($current, ['mlbb','gt','genshin','hsr']) ? 'active' : '' ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Games
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="index.php?page=mlbb">Mobile Legends : Bang Bang</a></li>
            <li><a class="dropdown-item" href="index.php?page=gt">Guardian Tales</a></li>
            <li><a class="dropdown-item" href="index.php?page=genshin">Genshin Impact</a></li>
            <li><a class="dropdown-item" href="index.php?page=hsr">Honkai : Star Rails</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="index.php?page=about" class="nav-link <?= $current === 'about' ? 'active' : '' ?>">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
