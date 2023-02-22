<?php
/**
 * template for displaying all pages
 */
get_header();
?>

<!-- #primary.content-area -->
<div id="primary" class="content-area">
  <main id="id" class="site-main">
    <?php 
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/page/content', 'page' );  // content-page.php  (the 'page' is the slug, the 'content' is the prefix)
      
        // second part
        // If comments are open then we can show the comments template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        
        if( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      endwhile;
    ?>
  </main>
  <?php 
    get_sidebar();
  ?>
</div>

<?php get_footer(); ?>