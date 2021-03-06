<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
 
    <!--=== META TAGS ===-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     
    <!--=== LINK TAGS ===-->
    <link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS2 Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
 
    <!--=== TITLE ===-->  
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>

    <!--=== COLOR VARS ===-->

    <style>

    
    :root{
    <?php 
        $parties = get_terms(array(
            'taxonomy' => 'party',
            'hide_empty' => false,
        ) );
        foreach($parties as $party){

            echo sprintf('--%s-color: #%s;', $party->slug, get_term_meta($party->term_id, 'party_color', true));

        }
?>
    }
    </style>


    <!--=== WP_HEAD() ===-->
    <?php wp_head(); ?>
      
</head>
<body <?php body_class(); ?>>
 
<!-- HERE GOES YOUR HEADER MARKUP, LIKE LOGO, MENU, SOCIAL ICONS AND MORE -->
 
<!-- DON'T FORGET TO CLOSE THE BODY TAG ON footer.php FILE -->
<header class="site-header">
	
	<?php get_template_part("components/common/siteLogo"); ?>
	<?php get_template_part("components/common/nav"); ?>

	<?php get_template_part("components/common/searchBar"); ?> 
    <?php get_template_part("components/common/accountMenu"); ?>

 
</header> 