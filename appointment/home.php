<?php
/**
 * Design for blog post page
 * 
 * @package doctorappintment
 */

get_header();

// News page ID
$news_page_id = get_option('page_for_posts');
$news_page    = get_post($news_page_id);
?>

<section class="news-page-content">

    <?php if ( $news_page ) : ?>
            <?php
            echo apply_filters(
                'the_content',
                $news_page->post_content
            );
            ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
