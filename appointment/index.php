<?php
/**
 * blog post page template file
 * 
 * @package doctorappintment
 */

get_header();
$args = array(
    'post_type'       => 'post',
    'post_status'     => array('publish'),
    'posts_per_page'  => -1,
    'orderby'         => 'date',
    'order'           => 'DESC',
);
?>
    <section class="news-page-content">
        <?php
        if( is_home() && ! is_front_page() ) :

        $blogs = new WP_Query( $args );

        if ( $blogs->have_posts() ) :
        ?>

    <div class="single-post-title">
        <h2><?php single_post_title(); ?></h2>
    </div>

    <div class="blog-row-wrapper">
        <?php
        $index = 0;
        $column_no = 3;

        while( $blogs->have_posts() ) : $blogs->the_post();
        if( 0 === $index % $column_no ) :
        ?>
    <div class="single-cart">
        <?php endif;
         get_template_part( 'template-part/content/post-content' );
            $index++;
            if ( $index === 0 && $index % $column_no === 0 ) :
        ?>
    </div>
    <?php endif; ?>

    <?php endwhile; ?>

    </div>

    <?php
    else :
    get_template_part( 'template-part/content/no-content' );
    endif;
    wp_reset_postdata();
    endif;
    ?>
    </section>

<?php get_footer(); ?>
