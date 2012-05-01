<?php get_header(); ?>

<div class="column span-24 wrap">
<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">
	<div class="arctitle">

	 <h2>Tag Archive: <?php single_tag_title("", true); ?></h2>

	</div>
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
<hr/>
    <?php endwhile; ?>

	<div class="navigation">
<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>

</div><!-- / Show main featured posts -->  

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>