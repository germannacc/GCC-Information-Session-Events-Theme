<?php
/**
* The template for displaying the home page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gcc-starterkit
*/
get_header();
?>

<section class="content-section py-5">
  
  <div class="container">
    
  <div class="row pt-5">

  <div class="col-sm-11 col-md-12">

  <div class="my-5 mb-4 bg-white pt-3 rounded" data-aos="fade-down">

    <h1 class="w-100 mb-4"><?php echo get_the_archive_title(); ?></h1>

      <div class="w-100">
    
        <?php the_field( 'explore_description_text', 'options' ); ?>

      </div>

      <div class="w-100">

        <?php the_field( 'explore_description_text_2', 'options' ); ?>

      </div>

       <div class="w-100">

        <?php the_field( 'register_online_text', 'options' ); ?>

      </div>

      <div class="w-100">

        <?php the_field( 'question_text', 'options' ); ?>

      </div>

  </div>

</div>
       
    <?php
      $args =  array (
      'post_type' => 'campus_tours',
      'meta_key'      => 'event_day',
      'orderby'     => 'meta_value',
      'order'   => 'ASC',
      'posts_per_page'=>-1,
      );
    ?>
 
     <?php
      $query = new WP_Query( $args ); ?>
     
      <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="col-lg-4 d-inline-block" itemscope itemtype="http://schema.org/Event">    
        <div class="card-group mb-4">
          <div class="card">
            <div class="card-body text-center">
              <i class="fa fa-calendar fa-2x text-primary mb-2"></i>
              <h2  class="m-0" itemprop="name" ><?php the_title(); ?></h2>
              <hr class="my-4">

            <?php $date = get_field('event_day', false, false); ?>
            <?php $date = new DateTime($date); ?>
            
            <meta itemprop="startDate" content="<?php echo $date->format('Y-m-d'); ?>">

            <p><?php the_field( 'event_day' ); ?><br/><?php the_field( 'event_time_start' ); ?> - <?php the_field( 'event_time_end' ); ?></p>

              <?php while ( have_rows( 'campus_center_location' ) ) : the_row(); ?>

            <p itemprop="location" itemscope itemtype="http://schema.org/Place"><?php echo the_sub_field( 'location_text' ); ?><br/>
                  <?php echo the_sub_field( 'city_text' ); ?>
                </p>
       
            <p>

              <?php $audience = get_field('event_audience_text'); ?>

        <?php if(!empty($audience)) : ?>
        
              <?php _e('Audience: ', 'gcc-starterkit'); ?>
            <?php the_field( 'event_audience_text' ); ?>

              <?php endif; ?>
          <?php if(empty($audience)) : ?>

            &nbsp;

          <?php endif; ?>
          
          </p>

  

             <?php endwhile; ?>

              <a href="<?php the_permalink(); ?>" itemprop="url">Register</a>

            </div>
          </div>
        
     </div>
</div>

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
      <?php endif; ?>


   </div>
 </div>
</section>
<?php
get_footer();