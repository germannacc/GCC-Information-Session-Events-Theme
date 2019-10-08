<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gcc-starterkit
*/
?>
<!-- Contact Section -->
<section class="contact-section bg-primary pt-5">
  <div class="container">
    <div class="social d-flex justify-content-center text-white">
      
    <a href="<?php the_field( 'twitter_url', 'options' ); ?>" class="mx-2">
          <i class="fa fa-twitter"></i>
     </a>
      
  
      <a href="<?php the_field( 'facebook_url', 'options' ); ?>" class="mx-2">
        <i class="fa fa-facebook-f"></i>
      </a>

      <a href="<?php the_field( 'youtube_url', 'options' ); ?>" class="mx-2">
        <i class="fa fa-youtube"></i>
      </a>
      <a href="<?php the_field( 'flickr_url', 'options' ); ?>" class="mx-2">
        <i class="fa fa-flickr"></i>
      </a>
      <a href="<?php the_field( 'instagram_url', 'options' ); ?>" class="mx-2">
        <i class="fa fa-instagram"></i>
      </a>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="bg-primary small text-center">
  <div class="container copyright text-white">
    
    <p><?php _e('&copy; ', 'gcc-starterkit'); echo get_the_date('Y'); ?> <a href="<?php esc_html('https://www.germanna.edu/', 'gcc-starterkit'); ?>"><?php _e('Germanna Community College', 'gcc-starterkit'); ?></a><br/>
    
    <?php the_field( 'copyright_text', 'options' ); ?></p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>