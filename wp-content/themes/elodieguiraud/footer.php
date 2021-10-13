<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__container">
			<div class="site-info">
				<div class="site-name">
					<?php if ( has_custom_logo() ) : ?>
						<div class="site-logo"><?php the_custom_logo(); ?></div>
					<?php else : ?>
						<div class="site-footer__site-logo">
							<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
								<?php if ( is_front_page() && ! is_paged() ) : ?>
									<?php bloginfo( 'name' ); ?>
								<?php else : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
								<?php endif; ?>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div><!-- .site-name -->
			</div><!-- .site-info -->
			<div class="site-footer__contact-infos">
				<p><span><?php echo do_shortcode('[contact type="street_number_name"]'); ?></span></p>
				<p><span><?php echo do_shortcode('[contact type="postcode"]'); ?></span>
				<span><?php echo do_shortcode('[contact type="location_name"]'); ?></span></p>
				<p><span><?php echo do_shortcode('[contact type="phone_number"]'); ?></span></p>
				<P><span><?php echo do_shortcode('[contact type="email_address"]'); ?></span></p>

			</div>
			<div class="site-footer__third-column">
				<?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
					<div class="site-footer__social-menu">
						<?php dynamic_sidebar( 'custom-side-bar' ); ?>
					</div>
				<?php endif; ?>
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
						<ul class="footer-navigation-wrapper">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'items_wrap'     => '%3$s',
									'container'      => false,
									'depth'          => 1,
									'link_before'    => '<span>',
									'link_after'     => '</span>',
									'fallback_cb'    => false,
								)
							);
							?>
						</ul><!-- .footer-navigation-wrapper -->
					</nav><!-- .footer-navigation -->
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
