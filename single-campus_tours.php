<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gcc-starterkit
*/
get_header();
?>
<?php
while ( have_posts() ) :
the_post();  ?>
<!-- About Section -->
<section class="content-section">
  
  <div class="container py-5">
  
  <div class="row">   

      <div class="entry-content" itemscope itemtype="http://schema.org/Event">
                
        <h1 class="mt-5 mb-3" itemprop="name">
          
          <?php _e('Campus Tours', 'gcc-starter-kit'); ?>: <?php the_title(); ?>                            
        </h1>

        <p class="h4"><?php the_field( 'campus_center_location' ); ?></p>
        
        <p itemprop="location" itemscope itemtype="http://schema.org/Place"><?php echo the_sub_field( 'location_city' ); ?>
        </p>
        
         <p>
          <?php echo the_sub_field( 'room_location' ); ?>
        </p>
             
        <?php the_field( 'event_day' ); ?><br/>
        <?php $date = get_field('event_day', false, false); ?>
        <?php $date = new DateTime($date); ?>
        
        <meta itemprop="startDate" content="<?php echo $date->format('Y-m-d'); ?>">
       
          <?php $dateformatstring = "F d, Y";
          
          $unixtimestamp = strtotime(get_field('event_date'));
          echo date_i18n($dateformatstring, $unixtimestamp); ?> <br/>
        
        <?php the_field( 'event_time_start' ); ?> - <?php the_field( 'event_time_end' ); ?>

        <p>
          
          <a href="<?php the_field( 'location_directions_url' ); ?>">
            <?php _e('Get Directions', 'gcc-starterkit'); ?>
          </a>

        </p>
        
        <hr class="my-4">
           
      <h3 class="my-4"><?php _e('Sign Up', 'gcc-starterkit') ?></h3>
     
        <?php
           
           the_field( 'event_registration_form_shortcode' );

        ?>

  </div>
    </div>
  </div>
</section>
<?php
endwhile; // End of the loop.
?>
<?php
get_footer();