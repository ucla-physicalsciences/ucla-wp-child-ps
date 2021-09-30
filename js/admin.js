(function($) {
  $('#jquery-datepicker').datepicker();
}(jQuery));
wp_enqueue_script( 'wp-jquery-date-picker', get_template_directory_uri() . '/js/admin.js' );
