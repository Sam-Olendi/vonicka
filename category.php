<?php

/**

 * The category template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 *
 * @package Vonicka
 * @since Vonicka 1.0
*/

get_header();

$category = single_cat_title( '', false );
$category_ID = get_cat_ID( $category );

?>

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

            <?php 

                $ajax_shortcode = sprintf(
                  '[ajax_load_more preloaded="true" preloaded_amount="3" offset="10" images_loaded="true" posts_per_page="7" pause="true" pause_override="true" max_pages="0" css_classes="infinite-scroll" category="%1$s"]',
                  $categoryTitle= get_cat_name($category_ID)
                );
                echo do_shortcode( $ajax_shortcode );

            ?>

        <?php else : ?>

            <p class="content-empty">no posts yet...</p>

        <?php endif; ?>

    </section>

    <?php get_sidebar(); ?>
    

<?php get_footer(); ?>