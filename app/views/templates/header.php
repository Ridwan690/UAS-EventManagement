<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
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
      
      .image-preview{
        max-height: 20px;
      }

      .footer {
        height: 60px; /* Tinggi footer */
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
    </style>
</head>
<body>

<?php
if (session_status() == PHP_SESSION_NONE) {
   session_start();// Pastikan session_start() sudah dipanggil di awal file
}
if (isset($_SESSION['admin'])) {
  // Pengguna sudah login
  $loggedIn = true;
  // ...
} else {
  // Pengguna belum login
  $loggedIn = false;
  // ...
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">EventWise</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link active" href="<?= BASEURL; ?>">Home <span class="sr-only">(current)</span></a>
          <!-- <a class="nav-item nav-link" href="<?= BASEURL; ?>/event">Event</a> -->
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/about">About</a>
        </div>
      </div>
  </div>
</nav>

<div class="content">

