<!-- Code was made by following along in class with Warren -->
<?php get_header(); ?>

<article>
  <h2>Page: <?php echo the_title(); ?></h2>
  <?php the_content(); ?>
</article>

<?php get_footer(); ?>