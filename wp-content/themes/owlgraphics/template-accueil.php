<?php
/* Template Name: Accueil */
get_header(); ?>
<div id="content" class="pageContent">
    <?php
    // TO SHOW THE PAGE CONTENTS
    while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <section id="accueil">
                <div class="container">
                    <div id="concept">
                        <?php the_content(); ?> <!-- Page Content -->
                        <ul>
                            <?php
                            if (have_rows('savoir_faire')):
                                while (have_rows('savoir_faire')) : the_row();
                                    ?>
                                    <li>
                                    <img src="<?php the_sub_field('illustration_savoir_faire'); ?>">
                                    <h4><?php the_sub_field('titre_savoir_faire'); ?></h4>
                                    <?php the_sub_field('texte_savoir_faire'); ?>
                                    <?php
                                endwhile;
                                ?>
                                </li>
                                <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="agence">
                <div class="container">
                    <div id="membres">
                        <?php the_field('titre_membres'); ?>
                        <ul>
                            <?php
                            if (have_rows('membres')):
                                while (have_rows('membres')) : the_row();
                                    ?>
                                    <li>
                                    <img src="<?php the_sub_field('illustration_membre'); ?>">
                                    <h4><?php the_sub_field('nom_prenom_membre'); ?></h4>
                                    <?php the_sub_field('contenu_membre'); ?>
                                    <?php
                                endwhile;
                                ?>
                                </li>
                                <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="concept">
                <div class="container">
                </div>
            </section>
            <section id="projets">
                <div class="container">
                    <div id="nos_projets">
                        <?php the_field('titre_projets'); ?>
                        <ul>
                            <?php
                            if (have_rows('projets')):
                                while (have_rows('projets')) : the_row();
                                    ?>
                                    <li>
                                    <img src="<?php the_sub_field('illustration_projet'); ?>">
                                    <div class="un_projet">
                                    <h4><?php the_sub_field('titre_projet'); ?></h4>
                                    <?php the_sub_field('contenu_projet'); ?>
                                    <a href="<?php the_sub_field('lien_projet');?>" class="plus">Plus</a>
                                    <?php
                                endwhile;
                                ?>
                                </div>
                                </li>
                                <?php
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="contact">
                <div class="container">
                    <?php echo do_shortcode("[contact-form-7 id=\"17\" title=\"Formulaire de contact\"]"); ?>
                    <div id="map"></div>
                    <script type="text/javascript">
                        google.maps.event.addDomListener(window, 'load', init);
                        var myLatlng = new google.maps.LatLng(48.84817719999999, 2.3411866000000146);
                        function init() {
                            var mapOptions = {
                                zoom: 15,
                                center: myLatlng,
                                styles: [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"},{"hue":"#0066ff"},{"saturation":74},{"lightness":100}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"},{"weight":0.6},{"saturation":-85},{"lightness":61}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"simplified"},{"color":"#5f94ff"},{"lightness":26},{"gamma":5.86}]}]
                            };
                            var mapElement = document.getElementById('map');
                            var map = new google.maps.Map(mapElement, mapOptions);
                            var marker = new google.maps.Marker({
                                position: myLatlng,
                                map: map
                            });
                        }
                    </script>
                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=&#9;&#10;AIzaSyBC-8UDSRxFvrfrK_lPv3Gx2wLMCwLdw5Q&amp;sensor=false"></script>
                </div>
            </section>
        </div><!-- .entry-content-page -->

        <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>

<?php
get_footer();
?>
