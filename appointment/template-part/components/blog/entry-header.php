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
            <a href="<?php echo esc_url( get_permalink() ); ?>">
                <?php
                the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-thumbnail',
                    [
                        'sizes' => '{max-width: 350px} 350px, 233px',
                        'class' => 'attachment-featured-large size-fetured-image'
                    ]
                )
                ?>
                <img src="" alt="">
            </a>
        </div>
    <?php endif; ?>
</header>