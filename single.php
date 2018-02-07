<?php
/**
* 
CV_Primus
* 
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<?php wp_head(); ?>
<script type="text/javascript">
jQuery(document).ready(function($) {
  	$('#static_background').css({backgroundPosition: '0px 0px'});
	$('#foreground').css({backgroundPosition: '0px 0px'});
	$('#background').css({backgroundPosition: '0px 0px'});
	$('#foreground').animate({
		backgroundPosition:"(-90000px -0px)"
		}, 8900000, 'linear');
	$('#background').animate({
		backgroundPosition:"(-2000px -0px)"
		}, 9999990, 'linear');
});

</script>

</head>
<body>
  <div id="static_background"></div>
<div id="background"></div>
<div id="foreground"></div>
<!-- Access Key Commands -->
<span>
<a href="http://localhost/Wordpress/accessibility" accesskey="a"></a>
<a href="http://localhost/Wordpress/sandbox/" accesskey="1"></a>
<a href="#headertype" accesskey="2"> </a>
<a href="#empkey" accesskey="w"></a>
<a href="#epostkey" accesskey="3"> </a>
<a href="#fpostkey" accesskey="4"> </a>
<a href="#expkey" accesskey="P"></a>
<a href="#profkey" accesskey="6"></a>
<a href="#edukey" accesskey="7"></a>
<a href="" accesskey="F"></a>
<a href="#dbox" accesskey="D"></a>
<a href="#obox" accesskey="O"></a>
<a href="#ebox" accesskey="E"></a>
<a href="#tbox" accesskey="T"></a>
<a href="#sbox" accesskey="U"></a>
<a href="#lbox" accesskey="L"></a>
<a href="http://localhost/Wordpress/sandbox/akleg" accesskey="0"></a>
</span>	
<!-- Access Key Commands_end -->
<!-- wrapper -->
<div id="wrapper" class="wrapper" role ="wrapper">
<!-- Bread -->
  <div id="bread" class="bread" role ="composition" style="margin: 0 40% 0 30%; max-width:600px; min-width:320px; width:100%; z-index:5;">
<u>
<span class="given-name family-name namtit">
<h1 class="a_header">

<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?> </a>
<?php 
bloginfo('description'); 
?>

</h1>
</u>
<!-- Given Name & Family Name_end -->


</span>



<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				    <div class="a_title">
					<h1><?php the_title(); ?></h1>
					</div>
					<div class="a_content">
						<?php the_content(); ?>
					</div>
				</article><!-- #post-## -->
<div class="QR">
<img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=<?php echo the_permalink(); ?>" width="150" height="150" alt="Some hit the QR code with 100 damage. It has failed." />		
</div>
								
<?php endwhile; // end of the loop. ?>
</div>
</div>
</body>
</html>