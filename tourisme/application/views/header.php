<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/mycss.css')?>">
    <title>Tourisme 2.0</title>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="header__left">
               <a href="#" class="header__logo">
                    Logo
                </a>
                <div class="header__left-containt">
                    <a href="#" class="btn btn--explore">Explore<i class="fas fa-angle-down btn--fav-explore"></i></a>
                    <div class="header__rechercher">
                        <form action="#" method="post">
                            <input type="text" name="" id="" class="header__input" placeholder="Rechercher...">
                        </form>
                        <i class="fas fa-search btn--fav-search"></i>
                    </div>
                </div>
            </div>
            <div class="header__rigth">
            <div class="header__connexion">
                    <a href="<?= site_url('Welcome/login')?>" class="btn btn--con">Connexion</a>                        
                </div>
                <div class="header__inscription">
                    <a href="<?= site_url('Welcome/sign_up')?>" class="btn btn--inser">Inscription</a>
                </div>
                <?php if (isset($_SESSION['user'])) : ?>
                    <img src="http://placehold.it/18x18" class="profile-image img-circle"> <?= $_SESSION['user']['name'] ?> <b class="caret"></b></a>
                    <div class="dropdown show">
                        <a class="bondary dropdown-toggle" btn-secid="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="<?= site_url('Treatment/disconnect') ?>">Se déconnecter</a>
                        </div>
                    </div>
                <?php endif;  ?>
            </div>
            <a href="#" class="hamburger__menu">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </nav> 
    </header>