<?php

session_start();

include "koneksi.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Web Vaksin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    .navbar {
      background-color: rgba(0, 255, 255, 0.1);
    }

    .container-fluid {
      background-color: cyan;
      width: 100%;
      padding: 50;
    }

    footer {
      position: fixed;
      bottom: 0;
      width: 15%;
      background-color: WHITE;
      text-align: left;
      padding: 10px;
    }

    footer p {
      position: right;
      font-size: 60%;
      bottom: 0;
      width: 10%;
    }

    .hamburger-icon {
      display: inline-block;
      cursor: pointer;
      padding: 10px;
    }

    .hamburger-icon span {
      display: block;
      height: 2px;
      width: 25px;
      margin-bottom: 5px;
      background-color: #333;

    }

    .navigation {
      display: none;
    }

    .show {
      display: block;
    }

    .slide_nav {
      display: block;
      position: fixed;
      z-index: 9999;
      top: 49px;
      left: 0px;
      bottom: 50px;
      width: 250px;
      height: 45%;
      margin: 0;
      padding: 20px 0;
      list-style: none;
      background-color: #324B4B;
      box-shadow: -2px 2px 6px rgba(red, green, blue, alpha);
      transition-duration: 0.25s;
    }

    .item {
      display: block;
      color: white;
      text-decoration: none;
      padding: 12px 24px;
      font-size: 18px;


    }

    .item:hover {
      background-color: blue;
    }

    .nav-item {
      position: center;
    }

    .table {
      border-color: black
    }

    .fter {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: #ffffff;
      z-index: 9999;

    }

    @media screen and (max-width: 768px) {
      .fter {
        position: static;
      }
    }
  </style>

  </style>
</head>

<body>
  <nav class="navbar" style="background-color: rgb(50, 75, 75, 1);">
    <div class="hamburger-icon">
      <span></span>
      <span></span>
      <span></span>
      <nav role="navigation" class="navigation">
        <ul class="slide_nav">
          <li><a class="item" href="home.php">Home</a></a></li>
          <li><a class="item" href="index.php">Data Pengguna Vaksin</a></li>
          <li><a class="item" href="data_vaksin.php">Data Vaksin</a></li>
          <li><a class="item" href="data_puskesmas.php">Data Puskesmas</a></li>
          <li><a class="item" href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <h4 style="text-align: center"></h4>
      </li>
    </ul>

    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    </div>
    </div>
  </nav>
  <script>
    const hamburgerIcon = document.querySelector('.hamburger-icon');
    const navigation = document.querySelector('.navigation');
    hamburgerIcon.addEventListener('click', () => {
      navigation.classList.toggle('show');
    });
  </script>