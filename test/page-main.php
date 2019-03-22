<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *Template Name: Home Page
 * @package test
 */

get_header();
?>

<?php get_template_part('/template-parts/blocks/slider'); ?>
<?php get_template_part('/template-parts/blocks/about');  ?>
<?php get_template_part('/template-parts/blocks/team') ; ?>
<?php get_template_part('/template-parts/blocks/works');  ?>
<?php get_template_part('/template-parts/blocks/modal');  ?>
<?php get_template_part('/template-parts/blocks/tabs');  ?>


<?php
get_footer();
