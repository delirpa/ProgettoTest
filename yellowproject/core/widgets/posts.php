<?php

/* INSTALL CHECK */ 
if (get_theme_option("posts_widget_installed")!=="installed") {
    update_theme_option('posts_widget_title', 'Posts');
	update_theme_option('posts_widget_number', 2);
	update_theme_option('posts_widget_installed', "installed");
}

class posts extends WP_Widget {

	function posts() {
		// Instantiate the parent object
		parent::__construct( false, 'Posts (current theme)' );
	}

	function widget( $args, $instance ) {
		extract($args);
    
		echo $before_widget; 
		echo $before_title;
		echo get_theme_option('posts_widget_title');
		echo $after_title; 
		
		#Output widget here
		
		if (!isset($compilepopular)) {$compilepopular='';}
		
		#Popular posts
		$args = array(
		'showposts'     => get_theme_option('posts_widget_number'),
		'offset'          => 0,
        'orderby'         => 'date',
        'order'           => 'DESC',
        'post_type'       => 'post',
        'post_status'     => 'publish'
        );

		$temp_latest = (isset($wp_query) ? $wp_query : '');
		$wp_query_latest= null;
		$wp_query_latest = new WP_Query();
		$wp_query_latest->query($args);
		while ($wp_query_latest->have_posts()) : $wp_query_latest->the_post();
		$featured_image_latest = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
		$firstCat = get_the_category( get_the_ID() );

        $readmorelinktext = ((get_theme_option("translator_status") == "enable") ? get_text("read_more_link") : __('Read more...','theme_localization'));

		
		$compilepopular .= '
		
		
		
			<li>
			    <div class="img_wrapper">';
					if (has_post_thumbnail()) {
					$compilepopular .= '<img class="alignleft" src="'.TIMTHUMBURL.'?w=88&amp;h=88&amp;src='.$featured_image_latest[0].'" alt="'.get_the_title().'">';
					}
					
$compilepopular .= '
                </div>
                <div class="recent_posts_content">
                    <span class="post_date">'.get_the_date().'</span>
                    <p>
                        '.smarty_modifier_truncate(get_the_excerpt(), 45).'
                    </p>
                    <span class="read_more"><a href="'.get_permalink().'">'.$readmorelinktext.'</a></span>
                </div>
			</li>
			
		';

		endwhile; wp_reset_query(); 
		
	
		echo '
			<ul class="recent_posts">
				'.$compilepopular.'
			</ul>
		';

		#END OUTPUT
		
		echo $after_widget; 
	}
	

	function update( $new_instance, $old_instance ) {
        update_theme_option('posts_widget_title', $_REQUEST['posts_widget_title']);
        update_theme_option('posts_widget_number', $_REQUEST['posts_widget_number']);
	}

	function form( $instance ) {
	// Output admin widget options form
	?>
		<table class="fullwidth">
            <tr>
				<td>Title:</td>
				<td><input type='text' class="fullwidth" name='posts_widget_title' value='<?php echo get_theme_option('posts_widget_title'); ?>'/></td>
			</tr>
			<tr>
				<td>Number:</td>
				<td><input type='text' class="fullwidth" name='posts_widget_number' value='<?php echo get_theme_option('posts_widget_number'); ?>'/></td>
			</tr>
		</table>
	<?php
	}
}

function posts_register_widgets() { register_widget( 'posts' ); } 
add_action( 'widgets_init', 'posts_register_widgets' );

?>