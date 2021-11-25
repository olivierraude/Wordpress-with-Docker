<?php get_header() ?>

<h1>Hello World!</h1>
<p>Welcome on <?php wp_title(); ?></p>

<h2>Test mes articles</h2>
<?php if (have_posts()) : ?>

    <div class="row">

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

            <div class="col-sm-4">
                <div class="card">
                <img src="<?php the_post_thumbnail('medium', ['class'=> 'card-img-top', 'alt'=> '', 'style'=> 'height: auto']) ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text">
                            <?php the_excerpt() ?>
                        </p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <h1>Il n'y a pas d'articles</h1>
<?php endif; ?>
<?php get_footer() ?>