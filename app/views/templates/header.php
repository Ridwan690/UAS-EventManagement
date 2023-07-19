<?php
// Cek apakah sesi sudah aktif sebelum memulai sesi
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman
    <?= $data['judul']; ?>
  </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">

  <style>
    html,
    body {
      height: 100%;
      margin: 0;
    }

    .content {
      min-height: 100%;
      margin-bottom: -60px;
    }

    .image-preview {
      max-height: 20px;
    }

    .footer {
      height: 60px;
      /* Tinggi footer */
      background-color: #f5f5f5;
      padding: 10px;
    }

    .bg-image-vertical {
      position: relative;
      overflow: hidden;
      background-repeat: no-repeat;
      background-position: right center;
      background-size: auto 100%;
      max-height: 200px
    }

    .card-img-top {
      width: 100%;
      height: 15vw;
      object-fit: cover;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">EFG</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
          <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home</a>
          <!-- <a class="nav-item nav-link" href="<?= BASEURL; ?>/event">Event</a> -->
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
        <?php if (isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] === true): ?>
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="<?= BASEURL; ?>/dashboard">Dashboard</a>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?= $username; ?>
              </a>
              <ul class="dropdown-menu">
                <form id="logout" action="<?= BASEURL; ?>/auth/logout" method="post">
                  <a href="#" onclick="submitForm()" class="dropdown-item">
                    <i class="fas fa-arrow-right mr-2"></i> Logout
                  </a>
                </form>
                <script>
                    function submitForm() {
                        document.getElementById('logout').submit();
                    }
                </script>
              </ul>
            </li> -->
          </div>
        <?php endif; ?>
      </div>
    </div>
  </nav>



  <div class="content">
    <!-- Your remaining HTML code -->