<?php
// template part for displaying page content
?>

<article id="post-<?php the_ID(); ?>">

<?php 
  the_title('<h1 class="entry-title">', '</h1>');
?>

<?php 
if ( has_post_thumbnail() ) : 
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
  if( get_edit_post_link() ) :
?>

<footer class="entry-footer">
  <?php 
    edit_post_link(
      sprintf(
        wp_kses(
          __('edit <span class="screen-reader-text">%s</span>'),
          array(
            'span' => array(
              'class' => array()
            )
          )
            ),
            get_the_title()
      ),
      '<span class="edit-link">', '</span>'
    )
  ?>
</footer>
<?php endif; ?>








</article>