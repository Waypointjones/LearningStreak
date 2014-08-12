<?php
/*
Template Name: Contact Divider
*/
?>
<?php get_header(); ?>
<section class="contactsection">
  <article>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; ?>    </div>
  </article>
</section>
<?php get_footer(); ?>