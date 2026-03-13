<?php
/**
 * The template part for displaying amessage that posts can not be found.
 * 
 * @package  appointment
 */
?>
<section class="no-result no-found">
    <header class="page-header">
        <h2> <?php echo esc_html__( 'Nothing found', 'appointment' ); ?></h2>
    </header>

    <div class="page-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) :
        ?>
        <p>
            <?php
            printf(
                wp_kses(
                    __( 'Ready to publish your first posts? <a href="%s"> Get staretd here</a>', 'appointment' ),
                    array(
                        'a' => array(
                            'href' => array(),
                        )
                    )
                ),
                esc_url( admin_url( 'post-new.php' ) )
            );
            ?>
        </p>

        <?php elseif ( is_search() ) : ?>
            <p>
                <?php echo esc_html__( 'Sorry but nothing matched yet your search item. Please try again' ); ?>
            </p>
            <?php get_search_form(); ?>

        <?php else : ?>
            <p>
                <?php echo esc_html__( 'It seems that we cannot find what you are looking for. Please try again' ); ?>
            </p>

        <?php endif; ?>
    </div>
</section>
