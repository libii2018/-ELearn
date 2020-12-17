<?php include('header.php'); ?>

<section class="premiere">
        <img src="<?= base_url().'assets/images/1101618.jpg' ?> " alt="photo_du_departement_du_tourisme_UY1" class="premiere__image">
        <p class="premiere__text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad eos praesentium fugit quae! Magni, corrupti porro illo nam exercitationem minima ducimus iusto tempore minus nesciunt perferendis similique, laborum eum. Doloremque?</p>
        <a href="<?= site_url('Welcome/formation') ?>" class="btn--premiere  premiere__center">Commencer une formation</a>
    </section>
    <section class="presentation container">
        <div class="presentation__containt">
            <div class="presentation__card">
                <h2 class="presentation__title">Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                <p class="presentation__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sit 
                    neque, obcaecati accusamus aliquid ipsum nam 
                    excepturi fugit dolores a incidunt. Nihil asperiores 
                    delectus fuga voluptas eos eum et incidunt!
                </p>
            </div>
            <div class="presentation__image" style="background-image:url('<?php echo base_url()?>assets/images/1.jpg');">
                <!-- <img src="images/1101618.jpg" alt=""> -->
            </div>
        </div>
        <div class="presentation__containt">
            <div class="presentation__card">
                <h2 class="presentation__title">Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                <p class="presentation__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sit 
                    neque, obcaecati accusamus aliquid ipsum nam 
                    excepturi fugit dolores a incidunt. Nihil asperiores 
                    delectus fuga voluptas eos eum et incidunt!
                </p>
            </div>
            <div class="presentation__image" style="background-image:url('<?php echo base_url()?>assets/images/1.jpg');">
                <!-- <img src="images/1101618.jpg" alt=""> -->
            </div>
        </div>
        <div class="presentation__containt">
            <div class="presentation__card">
                <h2 class="presentation__title">Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                <p class="presentation__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sit 
                    neque, obcaecati accusamus aliquid ipsum nam 
                    excepturi fugit dolores a incidunt. Nihil asperiores 
                    delectus fuga voluptas eos eum et incidunt!
                </p>
            </div>
            <div class="presentation__image" style="background-image:url('<?php echo base_url()?>assets/images/1.jpg');">
                <!-- <img src="images/1101618.jpg" alt=""> -->
            </div>
        </div>
    </section>
    <section class="banner container">
        <h3 class="banner__title">Obtenir des recommandations d'apprentissage personnalisées</h3>
        <div class="banner__text">Répondez à quelques questions pour vos sélections préférées</div>
        <a href="#" class="btn btn--banner">Premier pas</a>                            
    </section>
    <section class="categories container">
        <div class="title-blue container">
            <h2>Toutes les categories</h2>
        </div> 
        <div class="cards--categories">
            <a href="#">
                <div class="card--categorie">
                    <div class="card--categorie__img" style="background-image: url('<?php echo base_url()?>assets/images/1.jpg');"></div>
                    <div class="card--categorie__name">Sport</div>
                </div>
            </a>
        </div> 
    </section>


    <?php include('footer.php'); ?>
