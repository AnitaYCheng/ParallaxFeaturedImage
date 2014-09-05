// ADD TO YOUR FUNCTIONS.PHP FILE, DO NOT USE AS IS

// Add Parallax script
 function add_parallax_scripts() {
            wp_enqueue_script( 'parallax', get_stylesheet_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.1.3', true );
 	          wp_enqueue_script( 'parallaxcall', get_stylesheet_directory_uri() . '/js/parallaxcall.js', array(), '1', true );
}
 add_action( 'wp_enqueue_scripts', 'add_parallax_scripts' );
 

// Adds parallax to all featured images, adds margin to content if there is no featured image
	add_action ('genesis_before','use_parallax');
	function use_parallax() { 
		if ( has_post_thumbnail() ) {
			$parallaxImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large'); 
		?>
			<section class="parallax" id="section_<?php echo the_ID(); ?>" style="background: url('<?php echo $parallaxImage[0]; ?>') no-repeat fixed;"></section>
              	  <?
              	 }
              	else {
	          		echo '<div class="top_margin">&nbsp;</div>';
	          		}
		
		}