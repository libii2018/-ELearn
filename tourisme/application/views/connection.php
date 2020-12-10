<?php include "header.php" ?>

    <div class="form">
        <div class="form__contenue">
            <form action="<?= site_url('Treatment/login_t')?>" method="post">
                <h2>Heureux de vous revoir</h2>
                <?php if(isset($message)): ?>
                        <p class="form_error" id="error"><?= $message ?></p>
                <?php endif; ?>
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