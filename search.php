<?php get_header(); ?>


<h1>Search Results</h1>

These are your results, listed in most recent to least
recent! Hopefully you found what you
were looking for. The results include both <b>posts</b>
and <b>pages</b>, in case you wanted to know.
<br /><br />
<?php $posts=query_posts($query_string .
'&posts_per_page=10'); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h4><?php the_title(); ?></h4>
<?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>">More here...</a>
<br /><br /><br />
<?php endwhile; ?>


<h6><?php next_posts_link('&larr; Earlier') ?>&nbsp;&middot;&nbsp;
<?php previous_posts_link('Later &rarr;') ?></h6>

<?php else : ?>
<h1>Poop!</h1>
<p>Apparently your search results came up with nothing! D: Perhaps you made a spelling error? You can always try again :)</p>

<form role="search" method="get" id="searchform" action="http://rice.hugs.nu/"  >
	<center><div><label class="hidden" for="s" ></label>
	<p class="center"><input type="text" value="" name="s" id="s" style="width: 60%; height:20px" class="textInput"/>
	<input type="submit" id="searchsubmit" value="Search" class="textInput"/></p>
	</div></center>
	</form>


<?php endif; ?>

<?php get_footer(); ?>