<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
<section class="homesection">
  <article>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>

  </article>
</section>
<?php get_footer(); ?>