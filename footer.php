<!-- Code was made by following along in class with Warren -->
<nav>
  <h2>Footer Navigation</h2>
  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'footer_menu',
    )
  );
  ?>
</nav>
<footer>
  <h2>
    <?php bloginfo('title'); ?>Footer
  </h2>
  <p>
    &copy;
    <?php echo date('Y'); ?>
    <a href="<?php echo site_url(); ?>">
      <?php bloginfo('title'); ?>
    </a>
    All Rights reserved.
  </p>
</footer>
<?php
// Similar to wp_head(), but for footer scripts
// and output
wp_footer();
?>
</body>

</html>