<footer>
    <div class="maxwidth row">

        <div class="col contact">
            <h4>Contact</h4>
            <p>Eendrachtskade NZ 1</p>
            <p>9718 BA Groningen</p>
            <p>U kunt het beste contact opnemen via <a href="tel:0505270449">050 - 52 70 449</a>.</p>
            
            <div class="socials">
                <a rel="nofollow" target="_blank" href="https://www.facebook.com/LOOKS-Kapsalon-Haarwerken-378411676334149/"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg"></a>
            </div>
        </div>

        <div class="col opening-times">
            <h4>Openingstijden</h4>
            <?php echo do_shortcode('[mbhi_hours location="Kapsalon Looks"]'); ?>
        </div>

        <div class="col directions">
            <h4>Routebeschrijving</h4>
            <p>Kapsalon Looks is goed bereikbaar en ligt nabij Q-Park Westerhaven.</p>
            <p>De Eendrachtskade voert maximaal 2 uur (betaald) parkeren.</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1194.5968731165447!2d6.5542943583690825!3d53.21437439498788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9cd4c6b8fa0a1%3A0xb1f4006f17c9fed7!2sKapsalon+Looks!5e0!3m2!1sen!2snl!4v1533558109348" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

    </div>

    <div class="maxwidth row">
        <div class="copyright">
            
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-l.svg" alt="Kapsalon Looks">
            </a>

            <p>&copy; <?php echo date('Y'); ?> Kapsalon Looks.</p>

            <p><a target="_blank" rel="nofollow" href="https://www.anko.nl/data/pdf-documenten/algemene-voorwaarden-uv-2018.pdf">Algemene voorwaarden UV-branche</a></p>

            <a class="brands" rel="nofollow" target="_blank" href="https://www.anko.nl/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/anko.svg" alt="Anko">
            </a>

            <a class="brands" href="javascript:void(0);">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ellen_wille.png" alt="Ellen Wille - The Hair You Love">
            </a>
            <br>
            <a class="brands vandermolen" rel="nofollow" target="_blank" href="http://jhvandermolen.nl/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/vandermolen.png" alt="J.H. van der Molen Fotografie">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>