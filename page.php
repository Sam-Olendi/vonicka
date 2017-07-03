<?php

/**
 * The page template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 *
 * @package Vonicka
 * @since Vonicka 1.0
*/

get_header(); ?>

    <section class="content">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="content-feed">
                    <h2 class="content-feed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'content-feed-image']); ?>
                    <?php the_content(); ?>
                </article>

            <?php endwhile; ?>

        <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>
    

<?php get_footer(); ?>