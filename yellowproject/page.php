<?php
get_header();
the_post();

/* LOAD PAGE BUILDER ARRAY */
$pagebuilder = get_theme_pagebuilder(get_the_ID());
$pf = get_post_format();
if (empty($pf)) $pf = "default";
$pfIcon = get_pf_icon($pf);
$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
the_pb_custom_bg_and_color($pagebuilder);

?>

<div class="content_wrapper <?php echo ((isset($pagebuilder['settings']['show_breadcrumb']) && $pagebuilder['settings']['show_breadcrumb'] == "yes" && get_theme_option("show_breadcrumb") !== "off") ? 'withbreadcrumb' : 'withoutbreadcrumb') ?>">
    <div class="container">
	    <?php if (function_exists('the_breadcrumb') && isset($pagebuilder['settings']['show_breadcrumb']) && $pagebuilder['settings']['show_breadcrumb'] == "yes") the_breadcrumb(); ?>
        <div class="content_block <?php echo $pagebuilder['settings']['layout-sidebars'] ?> row">
            <div class="fl-container <?php echo (($pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                <div class="row">
                    <div class="posts-block <?php echo (($pagebuilder['settings']['layout-sidebars'] == "left-sidebar" || $pagebuilder['settings']['layout-sidebars'] == "right-sidebar") ? "span9" : "span12"); ?>">
                        <div class="contentarea">
                            <?php if ($pagebuilder['settings']['show_page_title'] !== "no") { ?>
                            <div class="row-fluid">
                                <div class="span12">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                </div>
                            </div>
                            <?php }

                            if (!post_password_required()) { the_pb_parser((isset($pagebuilder['modules']) ? $pagebuilder['modules'] : array())); }

                            global $contentAlreadyPrinted;
                            if ($contentAlreadyPrinted !== true) {
                                echo '<div class="row-fluid"><div class="span12">';
                                the_content(((get_theme_option("translator_status") == "enable") ? get_text("read_more_link") : __('Read more...','theme_localization')));
                                echo '</div><div class="clear"></div></div>';
                            }
                            ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . ((get_theme_option("translator_status") == "enable") ? get_text("translate_pages") : __('Pages','theme_localization')) . ': </span>', 'after' => '</div>' ) ); ?>
                        </div>
                    </div>
                    <?php get_sidebar('left'); ?>
                </div>
            </div>
            <?php get_sidebar('right'); ?>
            <div class="clear"></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>