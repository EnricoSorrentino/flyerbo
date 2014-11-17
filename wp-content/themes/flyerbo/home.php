<?php get_header(); ?>





<?php get_calendar(); ?>


<?php 
$archive_year  = get_the_time('Y'); 
$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 
?>
<a href="<?php echo get_day_link( $archive_year, $archive_month, $archive_day); ?>">This day's posts</a>




<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>

<?php get_footer(); ?>
