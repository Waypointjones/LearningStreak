<!doctype html>
<html>
<head>

<!-- Optimizely Code -->
<script src="//cdn.optimizely.com/js/1125190526.js"></script>

<meta charset="utf-8">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/responsive.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'hbd-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


<style>
/* Sample CSS class applied to sticky element */

.docked{
}

</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.anchor.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>
<script type="text/javascript" src="http://learningstreak.com/wp-content/uploads/2014/05/retina.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('.linkselect').click(function() {
	 $('.linkselect').removeClass( "selected" );
	 $(this).addClass( "selected" );
 	});
});
</script>




<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51656620-1', 'learningstreak.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

</script>

<!-- Google Code for LearningStreak.com Visitors -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 977330486;
var google_conversion_label = "1V-0COLIoQkQtsKD0gM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/977330486/?value=1.000000&amp;label=1V-0COLIoQkQtsKD0gM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<style>
.salesforce_w2l_lead .w2lsubmit{ float:none; clear:both; display: block !important; padding-top: 10px !important; }
</style>
</head>
<body>
<header id="headercontent">
  <div class="logo"><a href="#homesection" class="anchorLink"><img src="http://learningstreak.com/wp-content/uploads/2014/05/learning_streak_logo.png" width="444" height="48" alt="LearningStreak"></a></div>
  <nav>
  	<ul>
      <li><a href="#aboutsection" class="anchorLink linkselect">Learn More</a></li>
      <li><a href="#howitworkssection" class="anchorLink linkselect">How It Works</a></li>
      <li><a href="#contactsection" class="anchorLink linkselect">SAVE MY SPOT</a></li>
    </ul>
    
	<?php //wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header anchorLink' ) ); ?>
  </nav>
</header>

<div class="mainContainer">