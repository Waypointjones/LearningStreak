<?php
/*
Template Name: About Divider
*/
?>
<?php get_header(); ?>
<section class="aboutsection">
  <article>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>    
  </article>
</section>
