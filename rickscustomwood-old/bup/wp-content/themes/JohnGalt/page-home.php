<?php 
/*
* Template Name: Home Page
*
*/

get_header(); ?>
<div class="column span-24 wrap">
<?php //echo "<h1>The page-home.php</h1>"; ?>
<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">


	<?php while (have_posts()) : the_post(); ?>
		
       	<div class="column span-19 last">
			
            <div class="entry">
			
                <?php the_content(); ?>
			</div>
			
            <div class="clear commentsblock">
            	<?php comments_template(); ?>
            </div>
			
         </div>
		
    <?php endwhile; ?>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>		
	                
</div><!-- / Show main featured posts -->  

<?php //get_sidebar(); ?>

</div>
<?php get_footer(); ?>