<?php
include("./helpers/url.php");
include("./data/categories.php");
include("./data/posts.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
    <title>BLOG HORA DE CODAR</title>
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>./img/logo.svg" alt="Logo Blog">
        </a>

        <nav id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Categorias</a></li>
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Sobre</a></li>
            <li><a href="<?= $BASE_URL ?>/contact.php" class="nav-link">Contato</a></li>
        </nav>
    </header>