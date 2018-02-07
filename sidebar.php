<div id="sidemaster">
<div id="sidebar">


<!-- Profile_start -->
<div id="pbox" class="cbox" role ="ccontainer">
<div id="proftext">

<?php
$profString = "";
echo "<u>Profile</u>";
echo $profString;
?> 

</div>

<div id="profile" class="history" role="content">

<?php 
query_posts('posts_per_page=4&category_name=prof'); 
     if (have_posts()) : 
     while (have_posts()) : the_post(); ?>
     <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php endwhile;  else :  endif;  wp_reset_query(); ?>

</div>
</div>
<!-- Profile_end -->


<!-- Education_start -->
<div id="edbox" class="cbox" role ="ccontainer">

<div id="edutext">
<?php
$eduString = "";
echo "<u>Education</u>";
echo $eduString;
?> 
</div>

<div id="education" class="history" role="content">

<?php 
query_posts('posts_per_page=4&category_name=edu'); 
if (have_posts()) : 
     while (have_posts()) : the_post(); ?>
     <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php endwhile;  else :  endif;  wp_reset_query(); ?>

</div>
</div>
<!-- Education_end -->


<!-- Dawson Lightbox Gallery_start -->
<!-- Dawson Lightbox Query -->
<div id="dwqbox" class="cbox" role ="ccontainer">
<div id="dwquery" class="history" role="content">

<?php 
query_posts('posts_per_page=4&category_name=portfolio'); 
    if (have_posts()) : 
    while (have_posts()) : the_post(); ?>

<div class="portimage<?php echo $pimage;?>" id="post-<?php the_ID(); ?>">    		
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<?php the_content(); ?>
<?php endwhile;  else :  endif;  wp_reset_query(); ?>

</div>
</div>
<!-- end -->

<!-- Dawson Lightbox Contents_start -->
<div class="lightbox" id="image1">
     <p class="close"><a href="#" title="Close This Image Lightbox">Close <span>X</span></a></p>

<div id="image1_view w666 h298 nmm" class="image_view">    
     <img src="https://www.lunarcentric.com/wp-content/themes/cv_redrum/layout/image1_view.jpg" alt="Lena's on Lincoln" height="100%" width="100%"/>

<!-- CC image1_start -->
<div id="image1_cc" class="CC nmm"><a href="http://creativecommons.org/licenses/by-nc-nd/3.0/" rel="license"><img src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" style="border-width: 0pt;" alt="Creative Commons License"></a><br><span property="dct:title" xmlns:dct="http://purl.org/dc/terms/">Lena's on Lincolns Brand, Logo Design and Web Development</span> by <a rel="cc:attributionURL" property="cc:attributionName" href="www.mantis.me/adcornaglia" xmlns:cc="http://creativecommons.org/ns#">Armando Cornaglia</a> is licensed under a <a href="http://creativecommons.org/licenses/by-nc-nd/3.0/" rel="license">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.<br>Based on a work at <a rel="dct:source" href="www.mantis.me" xmlns:dct="http://purl.org/dc/terms/">www.mantis.me</a>.<br>Permissions beyond the scope of this license may be available at <a rel="cc:morePermissions" href="www.cafe-lol.com" xmlns:cc="http://creativecommons.org/ns#">www.cafe-lol.com</a>.</div>
<!--CC image1_end-->
</div>
</div>
</div>
<!-- Dawson Lightbox Gallery_end -->

</div>
</div>