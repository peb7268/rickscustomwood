<?php
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; }
    else { $$value['id'] = get_settings( $value['id'] ); }
    }
?>
<div class="column span-7 last sidebar2">
	<div class="column span-7 last about-me">
		<?php /* footer code set in theme options */ echo stripslashes($jgt_aboutmetext); ?>
	</div>
	<div class="column span-7 last sidebar-5">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>
		<?php endif; ?>
	</div>
	<div class="column span-3 sidebar-2">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>
		<?php endif; ?>
	</div>
	<div class="column span-4 last sidebar-3">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(5) ) : else : ?>
		<?php endif; ?>
	</div>
	<div class="column span-7 last sidebar-4">
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(6) ) : else : ?>
		<?php endif; ?>
	</div>
</div>