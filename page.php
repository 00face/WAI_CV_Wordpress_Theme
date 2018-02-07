<?php get_header(); ?>

<?php $latest = new WP_Query('&orderby=date&order=desc&posts_per_page= 10'); ?> 

<div id="content" class="narrowcolumn" role="main">


   <?php $loopcounter = "0" ?> 
   <?php $row = 1; ?> 
    



   <?php if (have_posts()) : ?><?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>      
   <?php while ($latest->have_posts()) : $latest->the_post();$loopcounter++; $i++; ?>
   <?php if ($row == 1) echo "<div class=\"row clearfix\">"; ?> 

   <div class="post row<?php echo $row;?>" id="post-<?php the_ID(); ?>"> 
   <h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
   <?php the_title(); ?></a></h4> 
   <?php $more = 0; the_content("view this project &raquo;"); ?> 
   </div> 

   <?php if ($row == 2) echo "</div>"; (($row==1) ? $row=2 : $row=1); endwhile; if( $loopcounter%7 ){ echo '</div>';} 
    
   endif; ?>

</div>

<?php get_footer(); ?>
