<?php get_header() ?>

    <?php /* if (have_posts()) : */ ?>
        <?php /* while (have_posts()) : the_post(); */ ?> 

        <!-- Formule simplifiée en ternaire -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <h1><?php the_title() ?></h1>
            <img class="mb-4" src="<?php the_post_thumbnail_url() ?>" alt="" style="margin: 0 15%; width: 70%; height: auto">
            <?php the_content() ?>

        <?php endwhile;
    endif; ?>

<?php get_footer() ?>