<?php
/**
 * Roots includes
 *
 * The $roots_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/roots/pull/1042
 */
$roots_includes = array(
  'lib/utils.php',           // Utility functions
  'lib/init.php',            // Initial theme setup and constants
    'lib/widgets.php',    // Custom functions
    'lib/wrapper.php',         // Theme wrapper class
    'lib/sidebar.php',         // Sidebar class
    'lib/config.php',          // Configuration
  'lib/activation.php',      // Theme activation
  'lib/titles.php',          // Page titles
  'lib/nav.php',             // Custom nav modifications
  'lib/gallery.php',         // Custom [gallery] modifications
  'lib/scripts.php',         // Scripts and stylesheets
  'lib/extras.php',
  'lib/breadcrumbs.php',    // Custom functions

);

foreach ($roots_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'roots'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
function add_comment_fields($fields) {

    $fields['type'] = '<p class="comment-form-age"><label for="type">' . __( 'Заголовок' ) . '</label>' .
        '<input id="type" name="type" type="text" size="30" /></p>';
    return $fields;

}
add_filter('comment_form_default_fields','add_comment_fields');
function add_comment_meta_values($comment_id) {

    if(isset($_POST['type'])) {
        $type = wp_filter_nohtml_kses($_POST['type']);
        add_comment_meta($comment_id, 'type', $type, false);
    }

}
add_action ('comment_post', 'add_comment_meta_values', 1);
