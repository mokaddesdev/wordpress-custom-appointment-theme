<?php
namespace Appointment_Theme\Inc\Classes;
use Appointment_Theme\Inc\Traits\Singleton;
/**
 * Register Meta Boxes
 * 
 * @package appointment
 */

class Meta_Boxes {

    use Singleton;

    protected function __construct() {
        $this->set_hooks();
    }

    protected function set_hooks() {
        add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_box' ] );
        add_action( 'save_post', [ $this, 'save_custom_meta_box' ] );
    }

    public function add_custom_meta_box() {

        $post_types = [ 'post', 'page' ];

        foreach ( $post_types as $post ) {

            add_meta_box(
                'page_title_hide',
                __( 'Hide page title meta', 'appointment' ),
                [ $this, 'render_meta_box_content_html' ],
                $post,
                'advanced',
                'high'
            );

        }
    }

    public function render_meta_box_content_html( $post ) {

        wp_nonce_field( 'hide_title_custom_box', 'hide_title_custom_box_nonce' );

        $value = get_post_meta( $post->ID, '_hide_title_meta_box', true );
        ?>

        <label for="hide_title_meta_box">
            <?php _e( 'Description for this field', 'appointment' ); ?>
        </label>

        <input type="text" id="hide_title_meta_box" name="_hide_title_meta_box"
        value="<?php echo esc_attr( $value ); ?>" size="25" />

        <?php
    }

    public function save_custom_meta_box( $post_id ) {

        if ( ! isset( $_POST['hide_title_custom_box_nonce'] ) ) {
            return $post_id;
        }

        if ( ! wp_verify_nonce( $_POST['hide_title_custom_box_nonce'], 'hide_title_custom_box' ) ) {
            return $post_id;
        }

        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return $post_id;
        }

        if ( 'page' === get_post_type( $post_id ) ) {

            if ( ! current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            }

        } else {

            if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }

        }

        $mydata = isset( $_POST['_hide_title_meta_box'] )
            ? sanitize_text_field( $_POST['_hide_title_meta_box'] )
            : '';

        update_post_meta( $post_id, '_hide_title_meta_box', $mydata );
    }
}