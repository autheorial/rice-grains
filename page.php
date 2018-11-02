<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content(); ?>


<?php endwhile; ?>


<?php else : ?>
<h1>Aw, hamburgers!</h1>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>


<?php endif; ?>

<?php get_footer(); ?>