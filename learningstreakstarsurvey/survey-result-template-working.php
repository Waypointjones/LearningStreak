<?php
/*
Template Name: Survey Result Template
*/

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "wpthemes";
$connWPTheme = mysql_connect($hostname, $username, $password, true) or die(mysql_error());

mysql_select_db($dbName, $connWPTheme);
$query_rsSurveyChoices = "Select * from surveychoices order by scSequence ASC";
$rsSurveyChoices = mysql_query($query_rsSurveyChoices, $connWPTheme) or die(mysql_error());
$totalRows = mysql_num_rows($rsSurveyChoices);


 





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
      <li><a href="../#contactsection">SAVE MY SPOT</a></li>
    </ul>
    
	<?php //wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header anchorLink' ) ); ?>
  </nav>
</header>

<div class="mainContainer">
<section class="slidesection">
  <article>
  <div class="content"><strong>What are you most excited about?</strong><br>

     <ul class="clearfix">
		<?php while ($row_rsSurveyChoices = mysql_fetch_assoc($rsSurveyChoices)){
			$varscID = $row_rsSurveyChoices['scID'];
			
			$query_rsResults = "Select sum(srVoteCount) AS totalVotes from surveyresult where scID = '$varscID'";
			$rsResults = mysql_query($query_rsResults, $connWPTheme) or die(mysql_error());
			$rsResultsRows = mysql_fetch_assoc($rsResults);
			
			// Get Total Rows
			$query_rsTotalRows = "Select * from surveyresult where scID = '$varscID'";
			$rsTotalRows = mysql_query($query_rsTotalRows, $connWPTheme) or die(mysql_error());
			$totalResultRows = mysql_num_rows($rsTotalRows);
			
			//echo $rsResultsRows[totalVotes] . " out of " . ($totalResultRows * 4);
			$varPercentage = ($rsResultsRows[totalVotes] / ($totalResultRows * 4)) * 100;
			
			?>
                <li><label><?php echo $row_rsSurveyChoices[scDescription]; ?></label><br>
                <div class="numberContainer">
                	<div class="results-bar" style="width: <?php echo round($varPercentage,2); ?>%; background-color: #4fc4d4; clear: both; color: #fff;">
					 <?php echo round($varPercentage,2); ?>% &nbsp;<span style="font-size: 11px;">(<?php echo $rsResultsRows[totalVotes] . " out of " . ($totalResultRows * 4);?>)</span>
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