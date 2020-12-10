<?php include "header.php" ?>
    <div class="form">
        <div class="form__contenue">
            <form action="<?= site_url('Treatment/sign_up_t')?>" method="post">
                <h2>bienvenue</h2>
               
                <?php if(isset($message)): ?>
                        <p class="form_error" id="error"><?= $message ?></p>
                <?php endif; ?>
                    
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
                    <input type="number" class="form-control"  name="tel" id="telephone" placeholder="Saisissez votre numéro (whatsapp de préférence)">
                </div>
                <div class="form-group form-group-select">
                    <label class="form-label" for="">Niveau</label><br>    
                    <select name="niveau" id="niveau" class="form-control">
                        <option value="L1">Licence 1</option>
                        <option value="L2">Licence 2</option>
                        <option value="L3">Licence 3</option>
                        <option value="M1">Master 1</option>
                    </select>
                </div>
                <div class="form-group form-group-radio">
                    <label class="form-label" for="">Sexe</label><br> 
                        <input type="radio" id="m" name="gender" value="m">
                        <label for="male">Homme</label>
                        <input type="radio" id="f" name="gender" value="f">
                        <label for="female">Femme</label>
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Mot de passe</label><br>
                    <input type="password" class="form-control"  name="password" id="password">
                </div>

                <div class="form-group">
                    <label class="form-label" for="">Saisissez à nouveau votre mot de passe</label><br>
                    <input type="password" class="form-control"  name="password2" id="password2">
                </div>

                <div>
                    <p class="new_account">Vous avez déjà un compte ? <a href="<?= site_url('Welcome/login') ?>" class="new_account_link">Connectez-vous !</a></p>
                </div>

                <button type="submit" class="btn--blue btn--large button" id = "send">Valider</button>
            </form>
        </div>
    </div>
    <script src="jquery-2.1.0.min.js"></script>
</body>

</html>
