<?php get_header(); ?>
<div class="column span-24 wrap">

<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">
		<?php if (have_posts()) : ?>
	 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>
<h2>Archive: <?php echo single_cat_title(); ?></h2>

<?php /* If this is a tag */ } elseif (is_tag()) { ?>
<h2>Tag Archive: <?php echo single_tag_title('', true); ?></h2>	

<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h2>Archive: <?php the_time('F jS Y'); ?></h2>

<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h2>Archive: <?php the_time('F Y'); ?></h2>

<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h2>Archive: <?php the_time('Y'); ?></h2>

<?php /* If this is a search */ } elseif (is_search()) { ?>
<h2>Search Results</h2>

<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h2>Author Archive</h2>

<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h2>Blog Archives</h2>

	<?php } ?>
	<?php while (have_posts()) : the_post(); ?>

		<div class="column span-12 last">

            <div class="entrytitle">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>

            <div class="entry">
                <?php echo strip_tags(get_the_excerpt(), '<p><a><strong>'); ?>
<p class="continue"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">Continue Reading This Post...</a></p>
			</div>

		</div>
    <?php endwhile; ?>

	<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>
	
	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<p>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
		</p>

	<?php endif; ?>
	                
</div><!-- / Show main featured posts -->  

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
