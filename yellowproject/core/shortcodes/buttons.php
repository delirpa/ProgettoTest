<?php

class buttons_shortcode {

	public function register_shortcode($shortcodeName) {
		function shortcode_button($atts, $content = null) {
			extract( shortcode_atts( array(
			  'style' => 'btn_small_black',
			  'href' => 'http://',
			), $atts ) );
	
			$content = strtr($content, array(
				'<p>'=>'',
				'</p>'=>'',
			));

			
			//Class names renames
			/*if ($type=="one_fourth") {$type="gridblock_1-4";}
			if ($type=="three_fourth") {$type="gridblock_3-4";}
			if ($type=="one_third") {$type="gridblock_1-3";}
			if ($type=="two_third") {$type="gridblock_2-3";}
			if ($type=="one_half") {$type="gridblock_2-4";}*/

			return '<a href="'.$href.'" class="shortcode_button '.$style.'">'.$content.'</a>';
		}
		add_shortcode($shortcodeName, 'shortcode_button');
	}
}




#Shortcode name
$shortcodeName="custom_button";

global $pbconfig;


#Compile UI for admin panel
#Don't change this line
global $compileShortcodeUI;
$compileShortcodeUI .= "<div class='whatInsert whatInsert_".$shortcodeName."'>".$defaultUI."</div>";

#Your code
$compileShortcodeUI .= "
Address url: <input style='width:160px;text-align:center;' value='' type='text' class='".$shortcodeName."_href' name='".$shortcodeName."_href'><br>
Style: 
<select name='".$shortcodeName."_style' class='".$shortcodeName."_style'>";
if (is_array($pbconfig['all_available_custom_buttons'])) {
    foreach ($pbconfig['all_available_custom_buttons'] as $buttonclass => $buttonCaption) {
    $compileShortcodeUI .= "<option value='".$buttonclass."'>".$buttonCaption."</option>";
    }
}
$compileShortcodeUI .= "</select>

<script>
	function ".$shortcodeName."_handler() {
	
		/* YOUR CODE HERE */
		
		var style = jQuery('.".$shortcodeName."_style').val();
		var href = jQuery('.".$shortcodeName."_href').val();

		/* END YOUR CODE */
	
		/* COMPILE SHORTCODE LINE */
		var compileline = '[".$shortcodeName." style=\"'+style+'\" href=\"'+href+'\"][/".$shortcodeName."]';
				
		/* DO NOT CHANGE THIS LINE */
		jQuery('.whatInsert_".$shortcodeName."').html(compileline);
	}
</script>

";






#Register shortcode & set parameters
$button = new buttons_shortcode();
$button->register_shortcode($shortcodeName);

#add shortcode to wysiwyg 
$shortcodesUI['shortcode_button'] = array("name" => $shortcodeName, "handler" => $compileShortcodeUI);

unset($compileShortcodeUI);

?>