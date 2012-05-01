<?php get_header(); ?>
<div class="column span-24 wrap">
<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">

           		<h2 class="center">Error 404 - Not Found</h2>
				<p><?php include (TEMPLATEPATH . '/searchform.php'); ?></p>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>		
	                
</div><!-- / Show main featured posts -->  

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>