<?php get_header() ?>

<h1>Hello World!</h1>
<p>Welcome on <?php wp_title(); ?></p>

<h2>Test mes articles</h2>
<ul>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <?php 
        /* 
        Debug de variables globales

        global $post;
        global $wp_query;
        var_dump($post);
        echo '<br>';
        echo '<br>';
        var_dump($wp_query);
        die(); */
        ?>

            <li>
                <a href="<?php the_permalink() ?>">
                    <?php the_title() ?>
                </a>
                 - 
                <?php the_author() ?>
            </li>

        <?php endwhile; ?>
    <?php endif; ?>
</ul>
<?php get_footer() ?>