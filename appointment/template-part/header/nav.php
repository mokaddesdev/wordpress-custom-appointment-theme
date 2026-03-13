<?php

use Appointment_Theme\Inc\Classes\Menus;

$menu_class = Menus::get_instance();
$header_menu_id = $menu_class->get_menu_id( 'header_menu' );
$header_menus = wp_get_nav_menu_items( $header_menu_id );
?>
<nav
    class="appointment-nav flex gap-5 items-center text-[18px] not-italic font-normal leading-normal text-[#FCFEFE] font-worksans">

    <?php if ( ! empty( $header_menus ) && is_array( $header_menus ) ) : ?>
    <ul class="flex no-underline gap-2">

        <?php foreach( $header_menus as $menu_item ) :
            if ( ! $menu_item->menu_item_parent ) :

                $child_menu_items = $menu_class->get_child_menu_items( $header_menus, $menu_item->ID );
                $has_children  = ! empty( $child_menu_items ) && is_array( $child_menu_items );

                if ( ! $has_children ) : ?>
                    <li>
                        <a href="<?php echo esc_url( $menu_item->url ); ?>">
                            <?php echo esc_html( $menu_item->title ); ?>
                        </a>
                    </li>
                <?php else : ?>
                    <li class="relative group flex gap-0.5 items-center justify-center">

                        <?php echo esc_html( $menu_item->title ); ?>
                        <span class="rotate-0 pt-0.5 group-hover:rotate-180 transition-all text-[18px]">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>

                        <ul
                            class="absolute top-full left-0 p-3 border rounded-lg border-amber-900 bg-white text-black invisible opacity-0 z-50 group-hover:visible group-hover:opacity-100 transition">

                            <?php foreach( $child_menu_items as $child_menu ) :
                                $grand_child_menu_items = $menu_class->get_grand_child_menu_items( $header_menus, $child_menu->ID );
                                $has_grand_child = ! empty( $grand_child_menu_items ) && is_array( $grand_child_menu_items );
                            ?>

                                <li class="relative group">
                                    <a href="<?php echo esc_url( $child_menu->url ); ?>">
                                        <?php echo esc_html( $child_menu->title ); ?>
                                        <?php if ( $has_grand_child ) : ?>
                                            <span class="ml-1 inline-block group-hover:rotate-90 transition-transform">▶</span>
                                        <?php endif; ?>
                                    </a>

                                    <?php if ( $has_grand_child ) : ?>
                                        <ul
                                            class="absolute top-0 left-full p-3 border rounded-lg border-amber-900 bg-white text-black invisible opacity-0 z-50 group-hover:visible group-hover:opacity-100 transition">

                                            <?php foreach( $grand_child_menu_items as $grand_child ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $grand_child->url ); ?>">
                                                        <?php echo esc_html( $grand_child->title ); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    <?php endif; ?>
                                </li>

                            <?php endforeach; ?>

                        </ul>

                    </li>
                <?php endif; ?>

            <?php endif; ?>
        <?php endforeach; ?>

    </ul>
    <?php endif; ?>

</nav>


<!-- search and button -->
<div class="flex items-center gap-7 pt-[2px]">
    <div class="relative">
        <button class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 22 22">
                <path stroke="#fcfefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.889 18.778A8.889 8.889 0 1 0 9.889 1a8.889 8.889 0 0 0 0 17.778M21 21l-4.833-4.833" />
            </svg>
        </button>
    </div>
    <button
        class="w-[173px] h-[44px] bg-[#BFD2F8] rounded-[50px] px-[35px] py-[8px] font-worksans text-[#1F2B6C] text-base not-italic font-medium leading-normal">Appointment</button>
</div>