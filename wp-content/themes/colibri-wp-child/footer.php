<footer>
  <h3>
    <?php $blogName = get_bloginfo( $show='name', $filter );
    echo $blogName; ?>
  </h3>
  <?php
  wp_nav_menu( array( 
      'theme_location' => 'footer-custom-menu', 
      'container_class' => 'footer-custom-menu' ) ); 
  ?>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
