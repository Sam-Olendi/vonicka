<?php

/**
 * The main template file.
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
                    <p class="content-feed-category"><?php the_category(', '); ?></p>
                    <h2 class="content-feed-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'content-feed-image']); ?>
                </article>

            <?php endwhile; ?>

            <?php echo do_shortcode("[ajax_load_more preloaded='true' preloaded_amount='3' images_loaded='true' posts_per_page='7' offset='10' pause='true' pause_override='true' max_pages='0' css_classes='infinite-scroll']"); ?>

        <?php else : ?>

            <p class="content-empty">no posts yet...</p>

        <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>
    

<?php get_footer(); ?>