<?php  include('header.php'); ?>

<section class="training_container container">
    <div class="training_header_container">
        <?php if(isset($details)) : ?>
            <?php if(!empty($details)) : ?>
                <article class="training_header" >
                    <div class="training_link">
                        <a href="<?= site_url('Welcome/formation')?>">Formations </a> > <a href="#"> <?= url_not_special_characters($details[0]->titre_formation)?></a></div>
                    <div class="training_details">
                        <h2 class="title"><?= $details[0]->titre_formation ?></h2>
                        <p class="p_details">
                            <span>Langue : Français </span><br>
                            <span>Crée par: Sorelle Kana </span><br>
                            <span>Dernière mise à jour : <?= $details[0]->date_publication?></span><br>
                            <br>
                            <div class="share_training">
                                <p>Partager sur : </p>
                                <a href="#"><i class="fab fa-facebook"></i> Facebook </a> • <a href="#"><i class="fab fa-twitter"></i> Twitter </a> • <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
                            </div>
                        </p>

                        <div class="cards card_price">
                            <p> Debutez votre formation maintenant à  <span style="font-weight: bold"> <?= $details[0]->cout_formation ?> FCFA  </span></p><br>
                            <div class="link_price">
                                <a class="btn btn--inser" href="#"> Acheter maintenant </a>
                            </div>
                        </div>
                    </div>
                    <br>
                </article>  
            <?php endif;  ?>
    
        <?php endif; ?>
    </div>
    <br><br>
    <?php if(isset($vids)): ?>
        <?php if(!empty($vids)): ?>
            <article class="program_training">
                <h2>Contenu de la formation </h2>
                <span class="program_details">O5 Vidéos • 5h de cours</span>
                <ul >
                    <?php foreach($vids as $vid ) : ?>
                        <li class="list"><?= $vid->titre_video ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endif;  ?>
    <?php endif; ?>
    <article class="read_also">
        <h2>Ces cours pourraient vous intéresser:  </h2>
        <div class="line"></div>
        <br>
        <div class="cards">
            <a href="#">
                <div class="img_other_prog">
                    <img src="<?= base_url(). 'assets/images/rapport.jpeg'; ?>">
                </div>
                <div class="other_details">
                    <h2>Titre de la formation</h2>
                    <p>O5 Vidéos • 5h de cours</p>
                </div>
                <div class="prix">
                    <h2>5000FCFA </h2>
                </div>
            </a>
        </div>
        
    </article>
    <br>

    <?php if(isset($comments)):  ?>
        <?php if(!empty($comments)): ?>
            <article class="training_comments">
                <h2>Ce qu'ils pensent de cette formation </h2>
                <div class="comments_content">
                    <?php foreach($comments as $comment) : ?>
                        <div class="comment_image">
                            <img src="<?= base_url(). 'assets/images/avatar_male.svg'; ?>">
                        </div>
                        <div class="comment_details">
                            <p class="user_name"> <?//= //$comment['message'];  ?></p>
                            <p class="contenu_comment"><?//= //$comment->message;  ?></p>
                            <p class="date_comment">12 Mai 2020</p>
                        </div>  
                    <?php endforeach;  ?>
                </div>
                <br>
                <div class="comments_content">
                    <div class="comment_image">
                        <img src="<?= base_url(). 'assets/images/avatar_male.svg'; ?>">
                    </div>
                    <div class="comment_details">
                        <p class="user_name"> FADIMATOU HAMIDA</p>
                        <p class="contenu_comment">je suis actuellement étudiante en master au département de tourisme et d'hôtellerie et j'aimerais témoigner de l'appui reçu par le camarade DONGFACK Arthur durant ma formation en licence professionnelle option guide de tourisme national de l'année académique 2019-2020. Cet appuis m'a particulièrement permis d'asseoir mes acquis théoriques reçu en salle spécialement en comptabilité. Grâce a l'aide de Arthur j'ai pu rédiger en toute quiétude mon mémoire tutoré. Son accompagnement m'a été très bénéfique surtout dans la partie financière de mon travail ou il m'a accompagné pas a pas dans l'élaboration de mes tableaux et de façon plus large dans l'évaluation financière et technique de mon projet. J'ai été particulièrement frappé par son professionalisme, sa patience et son écoute qui ont rendu son encadrement très digeste.</p>
                        <p class="date_comment">12 Mai 2020</p>
                    </div>  
                </div>
            </article>
        <?php endif; ?>
    <?php endif; ?>
</section>

<?php  include('footer.php'); ?>