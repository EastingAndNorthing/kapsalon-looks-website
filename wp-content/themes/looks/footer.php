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
            <?php $days = array('ma', 'di', 'wo', 'do', 'vr', 'za', 'zo'); //echo date('N'); ?>
            <p>ma gesloten</p>
            <p>di 09:00 - 18:00</p>
            <p>wo 09:00 - 18:00</p>
            <p>do 09:00 - 18:00</p>
            <p>vr 09:00 - 18:00</p>
            <p>za 09:00 - 18:00</p>
            <p>zo gesloten</p>
        </div>

        <div class="col directions">
            <h4>Routebeschrijving</h4>
            <p>Kapsalon Looks is goed bereikbaar en ligt nabij Q-Park Westerhaven.</p>
            <p>De Eendrachtskade voert maximaal 2 uur (betaald) parkeren.</p>
            <img src="<?php echo get_template_directory_uri(); ?>/img/directions.png" alt="Routebeschrijving">
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