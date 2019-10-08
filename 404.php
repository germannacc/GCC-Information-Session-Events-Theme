<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gcc-starterkit
 */

get_header();
?>
<section id="about" class="about-section" >
  
  <div class="container bg-white">
    
    <div class="row d-block">

    	<div class="entry-content text-center pt-5">

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<?php
					/* translators: %1$s: smiley */
					$gcc_starter_kit_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'gcc-starter-kit' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$gcc_starter_kit_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

</div>

</div>
</div>
</section>
<?php
get_footer();
