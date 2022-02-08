<?php include_once("helpers/url.php"); ?>
<?php include_once("data/categories.php"); ?>
<?php include_once("data/posts.php"); ?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog Codar</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
  <header>
    <a href="/" id="logo">
      <img src="/img/logo.svg" alt="Blog Codar">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="/" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categorias</a></li>
        <li><a href="#" class="nav-link">Sobre</a></li>
        <li><a href="/contato.php" class="nav-link">Contato</a></li>
      </ul>
    </nav>
  </header>