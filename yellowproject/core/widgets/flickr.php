<?php

/* INSTALL CHECK */ 
if (get_theme_option("flickr_widget_installed")!=="installed") {
	update_theme_option('flickr_widget_title', 'Flickr Photostream');
	update_theme_option('flickr_widget_number', 8);
	update_theme_option('flickr_widget_id', '29789996@N00');
	update_theme_option('flickr_widget_installed', "installed");
}

class flickr extends WP_Widget {

	function flickr() {
		// Instantiate the parent object
		parent::__construct( false, 'Flickr (current theme)' );
	}

	function widget( $args, $instance ) {
		extract($args);
    
		echo $before_widget; 
		echo $before_title;
		echo get_theme_option('flickr_widget_title');
		echo $after_title; 
		
		#Output widget here
		
		$number = get_theme_option('flickr_widget_number');
		$number--;

        wp_enqueue_script('js_jflickrfeed', get_template_directory_uri() . '/js/jflickrfeed.js');
        echo '<div class="flickr_widget_wrapper"><script src="http://www.flickr.com/badge_code_v2.gne?count='.get_theme_option('flickr_widget_number').'&display=latest&size=s&layout=x&source=user&user='.get_theme_option('flickr_widget_id').'"></script></div>';
		
		#END OUTPUT
		
		echo $after_widget; 
	}
	

	function update( $new_instance, $old_instance ) {
        update_theme_option('flickr_widget_title', $_REQUEST['flickr_widget_title']);
        update_theme_option('flickr_widget_id', $_REQUEST['flickr_widget_id']);
        update_theme_option('flickr_widget_number', $_REQUEST['flickr_widget_number']);
	}

	function form( $instance ) {
		// Output admin widget options form
	?>
		<table class="fullwidth">
			<tr>
				<td>Title:</td>
				<td><input type='text' class="fullwidth" name='flickr_widget_title' value='<?php echo get_theme_option('flickr_widget_title'); ?>'/></td>
			</tr>
			<tr>
				<td>Flickr ID:</td>
				<td><input type='text' class="fullwidth" name='flickr_widget_id' value='<?php echo get_theme_option('flickr_widget_id'); ?>'/></td>
			</tr>
			<tr>
				<td>Number:</td>
				<td><input type='text' class="fullwidth" name='flickr_widget_number' value='<?php echo get_theme_option('flickr_widget_number'); ?>'/></td>
			</tr>
		</table>
	<?php
	}
}

function flickr_register_widgets() { register_widget( 'flickr' ); } 
add_action( 'widgets_init', 'flickr_register_widgets' );

?>