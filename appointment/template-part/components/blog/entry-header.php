<?php
/**
 * Template for post entry header
 * 
 * @package  appointment
 */
$post_id = get_the_ID();
$post_thumbnail = get_the_post_thumbnail( $post_id );
?>
<header class="entry-header">
    <?php if ( $post_thumbnail ) : ?>
        <div class="entry-image">
            <a href="<?php get_permalink(); ?>">
                <img src="" alt="">
            </a>
        </div>
    <?php endif; ?>
</header>