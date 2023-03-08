<?php 
/**
 * the template for displaying archive pages.
 */
get_header();
?>

<div id="primary" class="content-area">
<main id="main" class="site-main">
    <?php if (have_posts(  )): ?>
        <header class="archive-header">
        <?php 
        the_archive_title('<h1 class="archive-title">', '</h1>');
        the_archive_description('<div class="archive-description">', '</div>');

        ?>
        </header>

        <?php 
        while (have_posts ()) :
            the_post();
            get_template_part('template-parts/post/content') ;
        endwhile;
        the_posts_pagination(array(
            'prev_text' => esc_html__('prev' ), 
            'prev_text' => esc_html__('next' ), 

        ) );
        else :
            get_template_part('template-parts/post/content', 'none');

        ?>
    <?php endif; ?>
</main>
</div>



 PAGE ----------

<?php 
/**
 * template part for displaying page content
 */
?>


<article id="post-<?php the_ID(); ?>">

    <?php 
    the_title('<h1 class="entry-title">', '</h1>');
    ?>

    <?php 
    if (has_post_thumbnail(  )) :
        the_post_thumbnail('full');
    endif;
    ?>

    <div class="entry-content">
    <?php 
    the_content();
    wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 
          'Pages:', 
          'wp-default-template' 
        ),
        'after' => '</div>',
      ) );
    ?>
    </div>

    <?php 
    if( get_edit_post_link(  )) :
    ?>
    
    <footer class="entry-footer">

    <?php 
    edit_post_link(
        sprintf(
            wp_kses(
                __('Edit <span class="screen-reader-text">%s</span>'),
                array(
                    'span'=> array(
                        'class'=> array()
                    )
                )
                    ),
                    get_the_title()
        ),
        'span class="edit-link"','</span>'
    );
    ?>
    </footer>
    <?php endif; ?>


</article>


post ----------

<?php
/**
 * Template part for displaying posts
 */
get_header(  );
?>
<article id="post-<?php the_ID(); ?>">
  <header class="entry-header">
    <?php 
      if( is_singular(  ) ) : 
        the_title( '<h1 class=entry-title>', '</h1>' );
      else :
        the_title( '<h2 class=entry-title><a href="'.esc_url(get_permalink()).'">', '</a></h2>' );
      endif;
    ?>
  </header>

  <?php 
    if ( is_home() || is_archive() ) :
      
  ?>

  <?php 
    if( has_post_thumbnail( )) :
      the_post_thumbnail( 'large' ); // medium, small, full, large, custom
    endif; 
  ?>

  <div class="entry-content">
    <?php the_excerpt(  ); ?>
  </div>
  <?php elseif( is_single() ) : ?>
  <div class="entry-content">
    <?php the_content(  ); 
      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 
          'Pages:', 
          'wp-default-template' 
        ),
        'after' => '</div>',
      ) );
    ?>
  </div>
  <?php endif; ?>
<footer class="entry-footer default-max-width">

</footer>

</article>