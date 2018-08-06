<footer>
    <div class="maxwidth row">
        
        <!-- <div class="col logos">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" alt="Kapsalon Looks">
            </a>
        </div> -->

        <div class="col contact">
            <h4>Contact</h4>
            <p>Eendrachtskade NZ 1</p>
            <p>9718 BA Groningen</p>
            <p>U kunt het beste contact opnemen via <a href="tel:0505270449">050 - 52 70 449</a></p>
        </div>

        <div class="col opening-times">

            <h4>Openingstijden</h4>
            <?php echo do_shortcode('[mbhi_hours location="Kapsalon Looks"]'); ?>
            
            <!-- <?php $days = array('ma', 'di', 'wo', 'do', 'vr', 'za', 'zo'); //echo date('N'); ?>
            <p>ma gesloten</p>
            <p>di 09:00 - 18:00</p>
            <p>wo 09:00 - 18:00</p>
            <p>do 09:00 - 18:00</p>
            <p>vr 09:00 - 18:00</p>
            <p>za 09:00 - 18:00</p>
            <p>zo gesloten</p> -->
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
                <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" alt="Kapsalon Looks">
            </a>

            <p>&copy; <?php echo date('Y'); ?> Kapsalon Looks.</p>

            <p><a target="_blank" href="https://www.anko.nl/data/consumenten/algemene-voorwaarden-voor-uv-branches-1.pdf">Algemene voorwaarden UV-branche</a></p>

            <a class="brands" rel="nofollow" target="_blank" href="https://www.anko.nl/">
                <img src="<?php echo get_template_directory_uri(); ?>/img/anko.svg" alt="Anko">
            </a>

            <a class="brands" target="_blank" href="javascript:void(0);">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ellen_wille.png" alt="Ellen Wille - The Hair You Love">
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>