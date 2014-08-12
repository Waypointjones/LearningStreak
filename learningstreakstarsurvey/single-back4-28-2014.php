<!doctype html>
<html>
<head>
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.anchor.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
// First Set Of Choice
	$('.inputRadius1').mouseover(function() {
	  $(this).css("background-color", "#4fc4d4");
 	});
	
	$('.inputRadius1').mouseout(function() {
	  if (!$(this).data("sticky")){
	    $(this).css("background-color", "#CCC");
	  }
	});
	
	$('.inputRadius1').click(function() {
	  $('.inputRadius1').data("sticky", false);
	  $('.inputRadius1').css("background-color", "#CCC");
	  $(this).data("sticky", true);
	  $(this).css("background-color", "#4fc4d4");
	  $('#hidvalue1').val($(this).val())
 	});

// Second Set Of Choice
	$('.inputRadius2').mouseover(function() {
	  $(this).css("background-color", "#4fc4d4");
 	});
	
	$('.inputRadius2').mouseout(function() {
	  if (!$(this).data("sticky")){
	    $(this).css("background-color", "#CCC");
	  }
	});
	
	$('.inputRadius2').click(function() {
	  $('.inputRadius2').data("sticky", false);
	  $('.inputRadius2').css("background-color", "#CCC");
	  $(this).data("sticky", true);
	  $(this).css("background-color", "#4fc4d4");
	  $('#hidvalue2').val($(this).val())
 	});

// Third Set Of Choice
	$('.inputRadius3').mouseover(function() {
	  $(this).css("background-color", "#4fc4d4");
 	});
	
	$('.inputRadius3').mouseout(function() {
	  if (!$(this).data("sticky")){
	    $(this).css("background-color", "#CCC");
	  }
	});
	
	$('.inputRadius3').click(function() {
	  $('.inputRadius3').data("sticky", false);
	  $('.inputRadius3').css("background-color", "#CCC");
	  $(this).data("sticky", true);
	  $(this).css("background-color", "#4fc4d4");
	  $('#hidvalue3').val($(this).val())
 	});

// Fouth Set Of Choice
	$('.inputRadius4').mouseover(function() {
	  $(this).css("background-color", "#4fc4d4");
 	});
	
	$('.inputRadius4').mouseout(function() {
	  if (!$(this).data("sticky")){
	    $(this).css("background-color", "#CCC");
	  }
	});
	
	$('.inputRadius4').click(function() {
	  $('.inputRadius4').data("sticky", false);
	  $('.inputRadius4').css("background-color", "#CCC");
	  $(this).data("sticky", true);
	  $(this).css("background-color", "#4fc4d4");
	  $('#hidvalue4').val($(this).val())
 	});
	
	
});

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
</head>
<body>
<header id="headercontent">
  <div class="logo"><a href="#homesection" class="anchorLink"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/learning_streak_logo.png" width="444" height="48" alt="LearningStreak"></a></div>
  <nav>
  	<ul>
      <li><a href="../#aboutsection">Learn More</a></li>
      <li><a href="../#howitworkssection">How It Works</a></li>
      <li><a href="../#contactsection">SAVE MY SPOT</a></li>
    </ul>
  </nav>
</header>

<div class="mainContainer">
<section class="slidesection">
  <article>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>
  </article>
</section>
<?php get_footer(); ?>