<?php

/**
 * The search template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 *
 * @package Vonicka
 * @since Vonicka 1.0
*/

get_header(); ?>

    <section class="content">

        <?php if ( have_posts() ) : ?>

            <p class="content-search-text"><?php printf( __( '<span>Search results for:</span><br> <i>%s</i>', 'vonicka' ), '<span class="content-search-query">' . get_search_query() . '</span>' ); ?></p>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="content-feed">
                    <p class="content-feed-category"><?php the_category(', '); ?></p>
                    <h2 class="content-feed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'content-feed-image']); ?>
                </article>

            <?php endwhile; ?>

        <?php else : ?>

            <p class="content-search-text">No results found for: <br> <span class="content-search-query"><i><?php echo get_search_query(); ?></i></span></p>

        <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>
    

<?php get_footer(); ?>