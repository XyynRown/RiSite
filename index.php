<?php $page = $_GET['page'] ?? 'home';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Haris</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="d-flex flex-column min-vh-100 <?php
    if($page == "mlbb" || $page == "gt" || $page == "genshin" || $page == "hsr"){
        echo " bg-black";
    }
?>">
    <!-- navbar -->
    <?php include "navbar.php";?>
    <main class="flex-grow-1">
            <?php
            switch($page){
                case "home":
                    include "home.php";
                    break;
                case "about":
                    include "about.php";
                    break;
                case "mlbb":
                    include "navbar-games.php";
                    include "mlbb.php";
                    echo "<script src='hide-navbar.js'></script>";
                    break;
                case "gt":
                    include "navbar-games.php";
                    include "gt.php";
                    echo "<script src='hide-navbar.js'></script>";
                    break;
                case "genshin":
                    include "navbar-games.php";
                    include "genshin.php";
                    echo "<script src='hide-navbar.js'></script>";
                    break;
                case "hsr":
                    include "navbar-games.php";
                    include "hsr.php";
                    echo "<script src='hide-navbar.js'></script>";
                    break;
                default:
                    echo "<div class='container eror404'><h1>404 - Page not found</h1></div>";
                    break;
            }
        ?>
    </main>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    // Tunggu sampai DOM selesai
    window.addEventListener('load', function () {
      // Cek apakah Bootstrap berhasil dimuat (cek fungsi Bootstrap)
      if (typeof bootstrap === 'undefined') {
        console.warn('CDN gagal dimuat, menggunakan file lokal...');

        // Buat elemen <script> baru untuk file lokal
        const localScript = document.createElement('script');
        localScript.src = 'bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js';
        document.head.appendChild(localScript);
      } else {
        console.log('Bootstrap CDN berhasil dimuat.');
      }
    });
  </script>
</body>
</html>