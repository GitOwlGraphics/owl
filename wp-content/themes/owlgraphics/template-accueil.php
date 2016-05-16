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
                                    <a href="<?php the_sub_field('lien_projet'); ?>" class="plus">Plus</a>
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
                    <?php the_field('titre_contact'); ?>
                    <?php echo do_shortcode("[contact-form-7 id=\"17\" title=\"Formulaire de contact\"]"); ?>
                    <div id="map"></div>
                    <script>
                        function initMap() {

                            // coordonnées de l'emplacement
                            var myLatlng = new google.maps.LatLng(43.60460399999999,1.4476379999999835);
                            // emplacement de la map
                            var mapDiv = document.getElementById('map'); // on identifie la div map
                            // appel de la map
                            var map = new google.maps.Map(mapDiv, { // initialisation de l'objet
                                center: myLatlng,
                                zoom: 17, // zoom correct : 17
                                scrollwheel: false,
                                disableDefaultUI: true, // enleve l'UI standart
                                navigationControl: false, // empeche le delire des fleches
                                mapTypeControl: false,
                                scaleControl: false, // empeche de scroll
                                draggable: true, // mouvement de la map
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            });
                            // marqueur
                            marker = new google.maps.Marker({
                                map: map,
                                draggable: true,
                                animation: google.maps.Animation.DROP,
                                position: myLatlng,
                                draggable: false
                            });
                            // apparence de la map
                            map.set('styles', [
                                {
                                    featureType: 'poi',
                                    elementType: 'geometry',
                                    stylers: [
                                        {visibility: 'off'}
                                    ]
                                }, {
                                    featureType: 'landscape',
                                    elementType: 'geometry',
                                    stylers: [
                                        { hue: '#00FBB5' },
                                        { gamma: 0 },
                                        { saturation: 0 },
                                        { lightness: 20 }
                                    ]
                                },{
                                    featureType: 'poi.school',
                                    elementType: 'geometry',
                                    stylers: [
                                        {visibility: 'on'},
                                        {hue: '#fff700'},
                                        {lightness: -15},
                                        {saturation: 0}
                                    ]
                                }
                            ]);
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
                            async defer></script>
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
