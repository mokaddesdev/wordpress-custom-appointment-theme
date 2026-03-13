<?php
/**
 * Post content template
 * 
 * @package  appointment
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('class-name'); ?>>
    <?php
    get_template_part( 'template-part/components/blog/entry-header' );
    get_template_part( 'template-part/components/blog/entry-meta' );
    get_template_part( 'template-part/components/blog/entry-content' );
    get_template_part( 'template-part/components/blog/entry-footer' );
    ?>
</article>