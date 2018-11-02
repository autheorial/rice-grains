<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h5><?php the_title(); ?></h5>
<h3><?php the_time('F jS, Y') ?> | <?php comments_popup_link('Comment? / 0', 'Comment? / 1', 'Comment? / %');?></h3>

<?php the_content(); ?>


<h3>Categorized as <?php the_category(' &middot; ') ?><br />
<?php the_tags( 'Tagged: ', ', ', ''); ?><br /></h3>


<?php comments_template(); ?>
<?php endwhile; ?>

<h3><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></p></h3>


<h6><?php previous_post_link('%link', $link='&larr; Earlier') ?>&nbsp;&middot;&nbsp;
<?php next_post_link('%link', $link='Later &rarr; ') ?></h6>

<?php else : ?>
<h1>Aw, hamburgers!</h1>
<p> I apologize for the inconvenience, but something's
gone wrong! Ohnoes D: You should probably go back. I mean,
what else are you going to do here besides drink milk?</p>


<?php endif; ?>

<?php get_footer(); ?>
