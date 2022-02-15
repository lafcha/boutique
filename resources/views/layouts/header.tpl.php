<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="/resources/css/header.css">

    <title>Document</title>
</head>


<header class="p-3 bg-primary d-flex justify-content-between">
    <div id="logo"><img class="w-75" src="/resources/img/logoboutique.png" alt="Logo"></div>
    <div id="navbar">

        <nav class="navbar navbar-expand-lg navbar-light d-flex flex-row   translate-middle-y mt-5">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nos pains
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($breads as $rows => $bread){?>
                        <li><a class="dropdown-item" href="/app/controllers/productPageController.php"><?= $bread['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Viennoiseries
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($viennoiseries as $rows => $viennoiserie){?>
                            <li><a class="dropdown-item" href="#"><?= $viennoiserie['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Pâtisseries
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($pastries as $rows => $pastrie){?>
                        <li><a class="dropdown-item" href="#"><?= $pastrie['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Snacks
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($snacks as $rows => $snack){?>
                        <li><a class="dropdown-item" href="#"><?= $snack['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Boissons
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($drinks as $rows => $drink){?>
                        <li><a class="dropdown-item" href="#"><?= $drink['name']?></a></li>
                        <?php } ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
<?php
/*
<li><a class="dropdown-item" href="#">Baguette</a></li>
<li><a class="dropdown-item" href="#">Flûte </a></li>
<li><a class="dropdown-item" href="#">Pain de Mie</a></li>
<li><a class="dropdown-item" href="#">Pain aux Céréales</a></li>
<li><a class="dropdown-item" href="#">Pain Complet</a></li>*/?>