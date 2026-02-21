<?php
/**
 * Header
 * 
 * @package doctorappointment
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class('body-class'); ?> class="m-0 p-0 bg-[#fcfefe]">
    <?php if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } ?>
    <?php get_template_part('template-part/header/header', 'top'); ?>
    <header class=" bg-[#1F2B6C] flex  items-center justify-between gap-6 w-[1366px] mx-auto px-[187px] py-[17px]">
        <?php get_template_part('template-part/header/nav'); ?>
    </header>