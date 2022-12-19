<img id="flower" src="<?php echo get_stylesheet_directory_uri(); ?>/images/flowers.png">
<footer>
    <div class="footer-grid">
        <div class="footer-del1">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-lille.png">
            <h3>Information</h3>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'bottom-menu',
                    'container' => '',
                    'menu_class' => 'bottom-menu',
                )
            );
            ?>

        </div>
            <Div class="right-footer">
                <h3>Åbningstider</h3>
                <p>Man-tor: 10:00-17:30</p>
                <p>Fredag: 10:00-18:00</p>
                <p>Lørdag: 10:00-16:00</p>
            </Div>
            <div class="right-footer2">
                <h3>Find os her</h3>
                <p><a href="https://goo.gl/maps/k4ak23h5FctkJuN4A"></a>Kongensgade 1, 5000 Odense C<p>
                <a href="https://www.facebook.com/CalouvOdense"><img style="width: 40px; height:40px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb.png"></a>  
                <a href="https://www.instagram.com/calouv_/"><img style="width: 40px; height:40px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ig.png"></a>  

            </div>

    </div>
       <h3 style="margin-top:20px;" class="footer-betaling">Betalingsmuligheder</h3>
        <div class="footer-del2">
            <div class="betalingsmuligheder">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/betaling.png">
            </div>
        </div>
        <div class="copywrite">
            <p> &copy; 2022 Calouv - CVR: 29197849</p>
        </div>
</footer>

</body>
</html>