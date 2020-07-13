<?php
if (!is_admin()) {
}
?>

<?php
//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );
?>


<? 
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
?>

<?
add_filter( 'script_loader_tag', function ( $tag, $handle, $src ) {
    return sprintf( '<script src="%s"></script>', $src );
}, 10, 3 );
?>

<?php
add_action('init','load_jsloader');
    function load_jsloader() {
    	if (!is_admin()) {
		wp_deregister_script( 'jquery' );
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
		wp_enqueue_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
		wp_enqueue_script('jquery');
		wp_register_script('bgpos', 'http://www.lunarcentric.com/wp-content/themes/cv_redrum_single/js/jquery.backgroundPosition.js');
		wp_enqueue_script('bgpos');

    	}
    }


?>

<?php 
function myLoop($atts, $content = null) {
	extract(shortcode_atts(array(
	"query" => '',
	"category" => '',
	"class" =>'',
	"qloop" =>'',
	"limit" =>'',
	"orderby" =>'',
	"headcap" =>'<h2>',
	"endcap" => '</h2>',
	"pcat" => '',
	), $atts));
	global $wp_query,$paged,$post,$headcap,$endcap;
	$temp = $wp_query;
	$wp_query= null;
	$wp_query = new WP_Query(array('post_type' => 'project', 'posts_per_page' => $limit, 'orderby' => $orderby));
	if(!empty($category)){
		$query .= '&category_name='.$category;
	}
	if(!empty($query)){
		$query .= $query;
	}
	$wp_query->query($query);
	ob_start();
	?>
		
	
	<div class="<?php echo $qloop; ?>">
	<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	
	<div class="<?php echo $class; ?>">
<?php echo $headcap; ?><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php echo $endcap; ?>

	<?php the_content(); ?>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>

	
	</div>


	<?php $wp_query = null; $wp_query = $temp;
	$content = ob_get_contents();
	ob_end_clean();
	return $content;

}
	add_shortcode("loop", "myLoop");

?>
<?php 
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {

// add your ext => mime to the array
$existing_mimes['vcf']   = 'text/x-vcard';
$existing_mimes['vcard']   = 'text/x-vcard';
// add as many as you like

// and return the new full result
return $existing_mimes;

}
?>
