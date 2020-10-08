<!-- Code was made by following along in class with Warren -->
<?php get_header(); ?>

<article>
  <h2>
    Blog Post (single):
    <?php the_title(); ?>
  </h2>
  <p>
    <strong>Article Published on:</strong>
    <time datetime="<?php echo get_the_date(DATE_ATOM); ?>">
      <?php echo get_the_date(); // WP function; gets the date of posting. 
      ?>
    </time>
  </p>
  <h3>Post categories</h3>
  <ul>
    <?php
      // Get an array of category ID numbers for THIS post.
      $categories = wp_get_categories( get_the_id() );
      // Loop through the post categories...
      foreach($categories as $catID )
      { // Retrieve the WP_Term object for this ID.
        $currentCat = get_category( $catID );
        // Retrieve the current category's URL (Link).
        $categoryURL = get_term_link( $category );
        // Output the formatted list item (LI.)
        ?>
          <li>
            <a href="<?php echo $categoryURL; ?>">
              <?php echo $category->name; // Property from WP_Term ?>
            </a>
          </li>
      }
    ?>
  </ul>
  <h3>Post Content:</h3>
  <?php the_content(); // Displays the content ?>
</article>

<?php get_footer(); ?>