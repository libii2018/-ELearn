<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <title>Sign In Tourisme 2.0</title>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="header__left">
               <a href="#" class="header__logo">
                    Logo
                </a>
                <div class="header__categories">
                    <a href="#">categories</a>
                </div>
            </div>
            <div class="header__liens">
                <a href="#">SNK</a>
                <a href="#">SNK</a>
                <a href="#" class="btn--connecter">Se connecter</a>
                <a href="#" class="btn--blue">Inscription</a>
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