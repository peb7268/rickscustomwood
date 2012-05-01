<?php

// Theme options adapted from "A Theme Tip For WordPress Theme Authors"
// http://literalbarrage.org/blog/archives/2007/05/03/a-theme-tip-for-wordpress-theme-authors/

$themename = "John Galt";
$shortname = "jgt";

// Create theme options

$options = array (
										
				array(	"name" => "Text in About Me",
						"desc" => "Enter the HTML text that will appear in the About Me section in the sidebar. Feel free to remove or change any links. <strong>Hint:</strong> <a href=\"http://www.w3schools.com/HTML/html_links.asp\" target=\"_blank\">how to write a link</a>.",
						"id" => $shortname."_aboutmetext",
						"std" => "<p><a href=\"wp-admin/themes.php?page=functions.php\">Click Here</a> to customize the John Galt Theme options.</p>",
						"type" => "textarea",
						"options" => array(	"rows" => "5",
											"cols" => "94") ),
				array(	"name" => "Footer Text",
						"desc" => "Enter the HTML text that will appear in the bottom of your footer.",
						"id" => $shortname."_footertext",
						"std" => "Copyright @ 2011 | YOURSITE.COM",
						"type" => "textarea",
						"options" => array(	"rows" => "5",
						"cols" => "94") ),
						array(	"name" => "Footer Code",
								"desc" => "Enter any code you would like to place in the footer of your site, including any analytics code.",
								"id" => $shortname."_footercode",
								"std" => " ",
								"type" => "textarea",
								"options" => array(	"rows" => "3",
								"cols" => "94") ),
		  );

function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
                    update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }

                foreach ($options as $value) {
                    if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }

                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
                delete_option( $value['id'] ); }

            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "John Galt Theme Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> Options</h2>

<form method="post">

<table class="form-table">

<?php foreach ($options as $value) { 
	
	switch ( $value['type'] ) {
		case 'text':
		?>
		<tr valign="top"> 
		    <th scope="row"><?php echo $value['name']; ?>:</th>
		    <td>
		        <input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
			    <?php echo $value['desc']; ?>
		    </td>
		</tr>
		<?php
		break;
		
		case 'select':
		?>
		<tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
	            <select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                <?php foreach ($value['options'] as $option) { ?>
	                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                <?php } ?>
	            </select>
	        </td>
	    </tr>
		<?php
		break;
		
		case 'textarea':
		$ta_options = $value['options'];
		?>
		<tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
			    <?php echo $value['desc']; ?>
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="<?php echo $ta_options['rows']; ?>"><?php 
				if( get_settings($value['id']) != "") {
						echo stripslashes(get_settings($value['id']));
					}else{
						echo $value['std'];
				}?></textarea>
	        </td>
	    </tr>
		<?php
		break;

		case "radio":
		?>
		<tr valign="top"> 
	        <th scope="row"><?php echo $value['name']; ?>:</th>
	        <td>
	            <?php foreach ($value['options'] as $key=>$option) { 
				$radio_setting = get_settings($value['id']);
				if($radio_setting != ''){
		    		if ($key == get_settings($value['id']) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				}?>
	            <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
	            <?php } ?>
	        </td>
	    </tr>
		<?php
		break;
		
		case "checkbox":
		?>
			<tr valign="top"> 
		        <th scope="row"><?php echo $value['name']; ?>:</th>
		        <td>
		           <?php
						if(get_settings($value['id'])){
							$checked = "checked=\"checked\"";
						}else{
							$checked = "";
						}
					?>
		            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		            <?php  ?>
			    <?php echo $value['desc']; ?>
		        </td>
		    </tr>
			<?php
		break;

		default:

		break;
	}
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<p><?php _e('For more information about the <a href="http://learnfinancialplanning.com/john-galt-theme">John Galt Theme</a>, please visit the <a href="http://wordpress.org/support/forum/5">WordPress Forums</a> and make sure to tag your posts with "john galt" and/or "sproutventure").'); ?></p>

<?php
}

add_action('admin_menu' , 'mytheme_add_admin'); 


?>
<?php
if ( function_exists('register_sidebars') )
register_sidebar(array(
   	'name' => 'Left Sidebar Top',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));

register_sidebar(array(
   	'name' => 'Home Announcement',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));

register_sidebar(array(
   	'name' => 'Right Sidebar Top',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));  

register_sidebar(array(
   	'name' => 'Right Sidebar - Middle Left',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));  

register_sidebar(array(
   	'name' => 'Right Sidebar - Middle Right',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));  

register_sidebar(array(
   	'name' => 'Right Sidebar - Bottom',
   	'before_widget' => '<div class="side-box">',
   	'after_widget' => '</div>',
   	'before_title' => '<h5>',
   	'after_title' => '</h5>',
));  

//Register A custom Menu
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'primary_menu' => 'Main Navigation',
		  'left_side_menu' => 'Left Side Navigation',
		  'footer_menu' => 'Footer Navigation'
		)
	);
}




