<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Kost</title>

      <link rel="shortcut icon" href="layouts/assets/img/logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logo.jpg" class="brand">
                  <div class="user"></div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Beranda
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kontrakan_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kontrakan
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=pria_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kost Pria
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=wanita_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kost Wanita
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Rasyid Ridho
            </footer>
      </main>

</body>

</html>