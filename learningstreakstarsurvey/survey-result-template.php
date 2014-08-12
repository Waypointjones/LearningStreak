<?php
/*
Template Name: Survey Result Template
*/

$sql = "Select * from surveychoices order by scSequence ASC";
$result = $wpdb->get_results($sql) or die(mysql_error());


?>

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


<style>
/* Sample CSS class applied to sticky element */

.docked{
}

</style>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.anchor.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/slideControl.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.slideControl.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	$('.slideControl').slideControl();
	prettyPrint();
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
      <li><a href="../#contactsection">SAVE MY SPOT NOW</a></li>
    </ul>
    
	<?php //wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header anchorLink' ) ); ?>
  </nav>
</header>

<div class="mainContainer">
<section class="slidesection">
  <article>
  <div class="content"><strong>What are you most excited about?</strong><br>

     <ul class="clearfix">
		<?php foreach( $result as $results ) {
			$varscID = $results->scID;
			
			$sqlResult = "Select sum(srVoteCount) AS totalVotes from surveyresult where scID = '$varscID'";
			$rsResultsRows = $wpdb->get_var($sqlResult) or die(mysql_error());
			
			$sqltotalResultRows = "SELECT COUNT(*) FROM surveyresult where scID = '$varscID'";
			$totalResultRows = $wpdb->get_var($sqltotalResultRows) or die(mysql_error());
			$varPercentage = ($rsResultsRows / ($totalResultRows * 4)) * 100;
			
			?>
                <li><label><?php echo $results->scDescription; ?></label><br>
                <div class="numberContainer">
                	<div class="results-bar" style="width: <?php echo round($varPercentage,2); ?>%; background-color: #4fc4d4; clear: both; color: #fff;">
					 <?php echo round($varPercentage,2); ?>% &nbsp;<span style="font-size: 11px;">(<?php echo $rsResultsRows . " out of " . ($totalResultRows * 4);?>)</span>
					</div>
                </div>
                </li>
		<?php } ?>
	<div class="clearfix paddingTop"></div>
    </ul>
</div>
  </article>
</section>
<?php get_footer(); ?>