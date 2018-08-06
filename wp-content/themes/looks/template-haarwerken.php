<?php // Template name: Haarwerken ?>

<?php get_header(); ?>

<header class="hero dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bird.jpg')">

    <?php get_nav(); ?>

    <div class="content maxwidth">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" alt="Kapsalon Looks">
        <h1 class="fancy">Haarwerken</h1>
    </div>
</header>

<article class="maxwidth">
    <section class="prettyprint">

        <!-- <h1><?php the_title(); ?></h1> -->

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content();?>

        <?php endwhile; endif; ?>

    </section>
</article>

<?php get_footer(); ?>