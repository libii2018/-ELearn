<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <title>Document</title>
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
            <form action="<?= site_url('Treatment/sign_up_t')?>" method="post">
                <h2>bienvenue</h2>
                <?php if(isset($data['error'])): ?>
                    <p class="form_error">Veuillez remplir les champs correctement</p>
                <?php endif ?>
                
                <div class="form-group">
                    <label class="form-label" for="">Nom d'utilisateur</label><br>
                    <input type="text" class="form-control"  name="nom" id="nom">
                </div>
                <!--<div class="form-group">
                    <label class="form-label" for="">Email</label><br>
                    <input type="text" class="form-control"  name="email" id="">
                </div>-->
                <div class="form-group">
                    <label class="form-label" for="">Telephone</label><br>
                    <input type="number" class="form-control"  name="tel" id="" placeholder="Saisissez votre numéro (whatsapp de préférence)">
                </div>
                <div class="form-group form-group-select">
                    <label class="form-label" for="">Niveau</label><br>    
                    <select name="niveau" id="" class="form-control">
                        <option value="L1">Licence 1</option>
                        <option value="L2">Licence 2</option>
                        <option value="L3">Licence 3</option>
                        <option value="M1">Master 1</option>
                    </select>
                </div>
                <div class="form-group form-group-radio">
                    <label class="form-label" for="">Sexe</label><br> 
                        <input type="radio" id="male" name="gender" value="m">
                        <label for="male">Homme</label>
                        <input type="radio" id="female" name="gender" value="f">
                        <label for="female">Femme</label>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Mot de passe</label><br>
                    <input type="password" class="form-control"  name="password" id="">
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Saisissez à nouveau votre mot de passe</label><br>
                    <input type="password" class="form-control"  name="password2" id="">
                </div>

                <div>
                    <p class="new_account">Vous avez déjà un compte ? <a href="<?= site_url('Welcome/login') ?>" class="new_account_link">Connectez-vous !</a></p>
                </div>

                <button type="submit" class="btn--blue btn--large button">Valider</button>
            </form>
        </div>
    </div>
</body>
</html>