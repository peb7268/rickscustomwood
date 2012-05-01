<?php get_header(); ?>
<div class="column span-24 wrap">
<?php include("sidebar-left.php"); ?>

<div class="column span-12 featured">


	<?php while (have_posts()) : the_post(); ?>
		
            <div class="entrytitle">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> 
				<div class="post-info">
					<span class="time"><?php the_time('F j, Y'); ?></span> by <?php the_author(); ?> | <span class="comments">Comments: <a href="#comments"><?php comments_number('0', '1', '%' ) ?></a>  <?php edit_post_link('| Edit this post','',''); ?></span>
				</div>
            </div>
            <div class="entry">
                <?php the_content(); ?>
			<span class="tags"><?php the_tags( '', ', ', ''); ?></span><span class="cats"><?php the_category(', ') ?></span>
			</div>
			
			
				<!--Share and Related-->
				<div class="column span-12 entry-floor last">
					<div class="column span-9 related">
						<?php 
						if(function_exists('related_posts')) { related_posts(); }
						else { echo 'Please install the <a href="http://mitcho.com/code/yarpp/">YARPP</a> plugin'; }
						?>
					</div>
					<div class="column span-3 share last" id="share">
						<ul>
							<li class="print"><a href="javascript:window.print()">Print</a></li>
							<li class="comments"><?php comments_rss_link('Comment Feed'); ?></li>
							<li class="stumble"><a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Stumble it</a></li>
							<li class="digg"><a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">Digg it</a></li>
							<li class="delicious"><a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>">del.icio.us</a></li>
							<li class="facebook"><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>">Facebook</a></li>
						</ul>
					</div>
				</div>
            <div class="clear commentsblock">
            	<?php comments_template(); ?>
            </div>
    <?php endwhile; ?>

	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>		
	                
</div><!-- / Show main featured posts -->  

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>