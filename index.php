<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php the_permalink() ?>" rel="bookmark"><h5><?php the_title(); ?></h5></a>
<h3><?php the_time('F jS, Y') ?> | <?php comments_popup_link('Comment? / 0', 'Comment? / 1', 'Comment? / %');?></h3>

<?php the_content(); ?>



<?php endwhile; ?>

<h3><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></h3>

<p class="left"><?php next_posts_link('&larr; Earlier') ?>&nbsp;&middot;&nbsp;</p>
<p class="right"><?php previous_posts_link('Later &rarr;') ?></p>

<?php else : ?>
<h1>Aw, hamburgers!</h1>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>


<?php endif; ?>

<?php get_footer(); ?>