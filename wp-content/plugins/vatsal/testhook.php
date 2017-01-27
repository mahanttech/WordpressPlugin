add_action( 'wp_head', 'my_facebook_tags' );
function my_facebook_tags() {
  echo 'I am in the head section';
}