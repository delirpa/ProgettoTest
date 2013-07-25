<?php
//delete_theme_option("contacts_widget_installed");
/* INSTALL CHECK */ 
if (get_theme_option("contacts_widget_installed")!=="installed") {
	update_theme_option('contacts_widget_title', 'Contact');
	update_theme_option('contacts_widget_message', 'Donec enim orci, fermentum vitae malesuada non, eleifend eu turpis. Sed eu est lectus, sed dapibus lectus. Nunc lectus massa, faucibus eget.');
	update_theme_option('contacts_widget_installed', "installed");
}


class contacts extends WP_Widget {

	function contacts() {
		// Instantiate the parent object
		parent::__construct( false, 'Contacts (current theme)' );
	}

	function widget( $args, $instance ) {
		extract($args);
    
		echo $before_widget; 
		echo $before_title;
		echo get_theme_option('contacts_widget_title'); 
		echo $after_title; 
		
		#Output widget here
		
		echo '
		<div class="widget_block">
			<ul class="list_contacts">';
if (strlen(get_theme_option("contacts_address"))>0) { echo '<li class="contacts_address">'.get_theme_option("contacts_address").'</li>'; }
if (strlen(get_theme_option("phone"))>0) { echo '<li class="contacts_phone">'.get_theme_option("phone").'</li>'; }
if (strlen(get_theme_option("email"))>0) { echo '<li class="contacts_email"><a href="mailto:'.get_theme_option("email").'">'.get_theme_option("email").'</a></li>'; }
if (strlen(get_theme_option("skype_name"))>0) { echo '<li class="contacts_skype">'.get_theme_option("skype_name").'</li>'; }
echo '		</ul>
		</div>
		<p>'.get_theme_option('contacts_widget_message').'</p>
		';
		
		#END OUTPUT
		
		echo $after_widget; 
	}
	

	function update( $new_instance, $old_instance ) {
        update_theme_option('contacts_widget_title', $_REQUEST['contacts_widget_title']);
        update_theme_option('contacts_widget_message', $_REQUEST['contacts_widget_message']);
	}

	function form( $instance ) {
		// Output admin widget options form
	?>
		<table class="fullwidth">
			<tr>
				<td>Title:</td>
				<td><input type='text' class="fullwidth" name='contacts_widget_title' value='<?php echo get_theme_option('contacts_widget_title'); ?>'/></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea class="fullwidth" name='contacts_widget_message'><?php echo get_theme_option('contacts_widget_message'); ?></textarea></td>
			</tr>
		</table>
	<?php
	}
}

function contacts_register_widgets() { register_widget( 'contacts' ); } 
add_action( 'widgets_init', 'contacts_register_widgets' );

?>