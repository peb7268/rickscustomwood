<?php get_header(); ?>
<div class="column span-24 wrap">
<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">
	<div class="column span-12 quote last">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
		<?php endif; ?>
	</div>

	<?php while (have_posts()) : the_post(); ?>
		
       	<div class="column span-12 last">
       	<?php echo "<h1>The home.php</h1>"; ?>
            <div class="entrytitle">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="post-info">
					<span class="time"><?php the_time('F j, Y'); ?></span> by <?php the_author(); ?> | <span class="comments"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
				</div>
            </div>
			
            <div class="entry">
                <?php the_excerpt(); ?>
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

<?php  //get_sidebar(); ?>

</div>
<?php get_footer(); ?>