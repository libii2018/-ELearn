<?php include('header.php'); ?>
 
 
 <div class="title-blue container">
        <h2>Toutes les formations</h2>
    </div>
    <div class="cards container">
        <div class="cards__container">
            <?php if(!empty($formations)): ?>
                <?php foreach($formations as $formation): ?>
                    <div class="card">
                        <a href="<?= site_url('Welcome/get_training_details/'.$formation['formation']->id_formation) ?>"><div class="card__img" style="background-image: url('<?= $formation['formation']->img_cover_formation?>');"></div></a>
                        <div class="card__footer">
                            <h2 class="card__title"><?= $formation['formation']->titre_formation ?></h2>
                            <h2 class="card__title"><?= $formation['formation']->cout_formation ?> FCFA</h2>
                            <p class="card__infos"><?= $formation['num'] ?> cours • <?= $formation['formation']->date_publication?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
               
            <?php else: ?>
                <p>Oups ! Il ny a pas encore de formations disponibles </p>
            <?php endif; ?>
        </div>
    </div>


    <?php include('footer.php'); ?>