<?php
/** 
 * The template for displaying search result pages.
*/
get_header() ;
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            if (  have_posts() ) :
                while( have_posts() ):
                    the_post();
                    get_template_part('template-parts/page/content', 'search');
                endwhile;

                echo paginate_links(
                    [
                        'prev_text' => esc_html('Forrige'),
                        'next_text' => esc_html('Næste')
                    ]
                );

            else :
                get_template_part('template_parts/post/content', 'none');

            endif;
        ?>
    </main>

</div>
<?php 
    get_footer();
?>