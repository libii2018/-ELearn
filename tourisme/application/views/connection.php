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
            </div>
            <a href="#" class="hamburger__menu">
                <span></span>
                <span></span>
                <span></span>
            </a>
        </nav>
    </header>
    <div class="form">
        <div class="form__contenue">
            <form action="<?= site_url('Treatment/login_t')?>" method="post">
                <h2>Heureux de vous revoir</h2>
                <div class="form-group">
                    <label class="form-label" for="">Nom utlisateur</label><br>
                    <input type="text" class="form-control"  name="nom" id="">
                </div>
                <div class="form-group">
                    <label class="form-label" for="">Mot de passe</label><br>
                    <input type="password" class="form-control"  name="password" id="">
                </div>
                <div>
                    <br>
                    <p class="new_account">Vous n'avez pas encore de compte ? <a href="<?= site_url('Welcome/sign_up')?>" class="new_account_link">Inscrivez-vous !</a></p>
                </div>
                <button type="submit" class="btn--blue btn--large button">Valider</button>
            </form>
        </div>
    </div>
</body>
</html>