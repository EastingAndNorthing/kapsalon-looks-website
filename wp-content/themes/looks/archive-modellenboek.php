<?php get_header(); ?>

<!-- <header class="hero dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bird.jpg')"> -->
<header class="hero dark" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bird2.jpg')">

    <?php get_nav(); ?>

    <div class="content maxwidth">
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.svg" alt="Kapsalon Looks">
        <h1 class="fancy">Modellenboek</h1>
    </div>
</header>

<article class="maxwidth">
    <section class="modellenboek">

        <div class="grid">
            <?php 

            global $query_string;
            query_posts( $query_string . '&posts_per_page=-1' );
            
            if (have_posts()) : while (have_posts()) : the_post(); ?>
                
                <a href="<?php echo get_the_post_thumbnail_url($post->ID, 'larger'); ?>" class="item swipebox">
                    <div class="model" style="background-image: url('<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>')"></div>
                </a>

            <?php endwhile; endif; ?>
        </div>

    </section>
</article>

<?php get_footer(); ?>