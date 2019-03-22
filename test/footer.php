<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

<div class="footer section">
	<div class="content">
		<div class="footer__copyrights">
			<p><?php the_field('footer_copyrights_text') ?> <?php echo date('Y'); ?><span> <?php the_field('footer_copyrights_company') ?></span></P>
		</div>
		<?php if (have_rows('footer_social_menu')): ?>
			<ul class="menu footer__social">
				<?php while(have_rows('footer_social_menu')):the_row(); ?>
					<li class="footer__social__item"><a href="<?php the_sub_field('social_menu_item_link')  ?>"><img src="<?php the_sub_field('social_menu_item_image') ?>" alt="social-icon"></a></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
