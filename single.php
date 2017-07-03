<?php

/**

 * The single post template file.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 * 
 *
 * @package Vonicka
 * @since Vonicka 1.0
*/

get_header(); ?>

<section class="story">

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

      <h2 class="story-title"><?php the_title(); ?></h2>
      <?php the_post_thumbnail(); ?>
      <?php the_content(); ?>

    <?php endwhile; ?>
  <?php endif; ?>

</section>

<?php get_footer(); ?>