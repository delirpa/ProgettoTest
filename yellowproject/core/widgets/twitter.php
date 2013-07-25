<?php

/* INSTALL CHECK */ 
if (get_theme_option("twitter_widget_installed")!=="installed") {
	update_theme_option('twitter_widget_title', 'Latest Tweets');
	update_theme_option('twitter_widget_nick', 'themedev');
	update_theme_option('twitter_widget_number', '3');
	update_theme_option('twitter_widget_installed', "installed");
}


class twitter extends WP_Widget {

	function twitter() {
		// Instantiate the parent object
		parent::__construct( false, 'Twitter (current theme)' );
	}

	function widget( $args, $instance ) {
		extract($args);
    
		echo $before_widget; 
		echo $before_title;
		echo get_theme_option('twitter_widget_title'); 
		echo $after_title;

        $rand = mt_rand(0, 10000);
		
		#Output widget here

		/*echo '
		<ul id="twitter_update_list"></ul>
		<div class="clear"></div>
		<a href="https://twitter.com/#!/'.get_theme_option("twitter_widget_nick").'" class="followme_btn">Follow me</a>
		<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
		<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/'.get_theme_option("twitter_widget_nick").'.json?callback=twitterCallback2&amp;count='.get_theme_option("twitter_widget_number").'">
		</script>
		';*/

        wp_enqueue_script('js_tweet', get_template_directory_uri() . '/js/jquery.tweet.js');

        echo '
        <div class="twitter_list tweet_'.$rand.'"></div>
        <script>
            $(document).ready(function(){
                $(".tweet_'.$rand.'").tweet({
                  avatar_size: 0,
                  count: '.get_theme_option("twitter_widget_number").',
                  username: "'.get_theme_option("twitter_widget_nick").'",
                  template: "{text}"
                });
            });
        </script>
        ';
		
		#END OUTPUT
		
		echo $after_widget; 
	}
	

	function update( $new_instance, $old_instance ) {
        update_theme_option('twitter_widget_title', $_REQUEST['twitter_widget_title']);
        update_theme_option('twitter_widget_nick', $_REQUEST['twitter_widget_nick']);
        update_theme_option('twitter_widget_number', $_REQUEST['twitter_widget_number']);
	}

	function form( $instance ) {
		// Output admin widget options form
	?>
		<table class="fullwidth">
			<tr>
				<td>Title:</td>
				<td><input type='text' class="fullwidth" name='twitter_widget_title' value='<?php echo get_theme_option('twitter_widget_title'); ?>'/></td>
			</tr>
			<tr>
				<td>Nick:</td>
				<td><input type='text' class="fullwidth" name='twitter_widget_nick' value='<?php echo get_theme_option('twitter_widget_nick'); ?>'/></td>
			</tr>
			<tr>
				<td>Tweets number:</td>
				<td><input type='text' class="fullwidth" name='twitter_widget_number' value='<?php echo get_theme_option('twitter_widget_number'); ?>'/></td>
			</tr>
		</table>
	<?php
	}
}

function twitter_register_widgets() { register_widget( 'twitter' ); } 
add_action( 'widgets_init', 'twitter_register_widgets' );

?>