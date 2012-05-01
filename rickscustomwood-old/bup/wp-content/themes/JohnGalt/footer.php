<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] = get_settings( $value['id'] ); }
    }
?>
<div class="clear"></div>
    
    <div class="column span-24 footer">
		  
        <div class="column span-24">
			<p>	<?php /* footer text set in theme options */ echo stripslashes($jgt_footertext); ?></p>
        </div>
          
        <div class="column span-24 credit footer2">
			
        </div>
	</div> 
		<?php /* footer code set in theme options */ echo stripslashes($jgt_footercode); ?>
        <?php wp_footer(); ?>
</div><!--/container-->
</body>
</html>