<?php
require 'app/controllers/categoriesController.php'
?>

    <!DOCTYPE html>
    <html lang="fr">
<head>
    <!doctype html>
    <html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Ma super boutique">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- ICONS -->
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <!-- STYLE -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/resources/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/resources/css/style.css">

    <title>Document</title>
</head>


<header class="p-3 bg-primary d-flex justify-content-between">
    <div id="logo"><a href="/index.php"><img class="w-75" src="/resources/img/logoboutique.png" alt="Logo"></a></div>
    <div id="navbar">

        <nav class="navbar navbar-expand-lg navbar-light d-flex flex-row flex translate-middle-y mt-5">
            <ul class="navbar-nav">
                <?php foreach ($printCategory as $category): ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdownMenuLink" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $category['name']; ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php foreach ($breads as $rows => $bread) { ?>
                            <li><a class="dropdown-item"
                                   href="http://boutique.local/?action=productPage&id=<?= $bread['id'] ?>"><?= $bread['name'] ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php endforeach;?>
                </li>
                <li><a href="http://boutique.local/?action=cart">
                        <div class="cart-pill2"></div>
                    </a></li>

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
<li><a class="dropdown-item" href="#">Pain Complet</a></li>*/ ?>