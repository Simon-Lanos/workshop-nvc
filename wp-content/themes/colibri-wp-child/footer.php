<footer>
  <div><?php colibriwp_theme_print_footer_copyright(); ?></div>
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
