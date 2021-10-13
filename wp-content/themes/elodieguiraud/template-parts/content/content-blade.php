<?php
/**
 * Template part for displaying blade type pages content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php if ( has_post_thumbnail() ) : ?>
	<?php $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false); ?>
	<div class="entry-content blade-entry-content blade-entry-content--background" style="--blade-background-image: url('<?php echo $thumbnail[0]; ?>')" >
<?php else : ?>
	<div class="entry-content">
<?php endif; ?>		
		<div class="alignwide blade-entry-content__wrapper 	">
			<div class="blade-entry-content__content <?php
		$isShadowBackground = get_field('fond_derriere_le_texte_de_la_premiere_section');
		if( $isShadowBackground == "oui" ): ?> blade-entry-content--shadow-background<?php endif; ?>  <?php if ( has_post_thumbnail() ) : ?> blade-entry-content--content-left <?php endif; ?>">
				<header class="entry-header blade-entry-content__header">
					<?php get_template_part( 'template-parts/header/entry-header' ); ?>
				</header><!-- .entry-header -->
				<?php
				the_content();
				wp_link_pages(
					array(
						'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
						'after'    => '</nav>',
						/* translators: %: Page number. */
						'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
					)
				);
				?>
			</div>
		</div>
	</div><!-- .entry-content -->


	<?php
		$section2 = get_field('deuxieme_section');
		if( $section2 ): ?>
			<div class="blade-entry__custom-section alignwide">
				<?php echo $section2; ?>
			</div>
	<?php endif; ?>
	<?php
		$productImage = get_field('image_effet_parallax');
		if( $productImage ): ?>
		<div class="blade-entry__parallax-wrapper parallax-wrapper">
			<div class="blade-entry__parallax--background parallax" style="--blade-parallax-image: url('<?php echo esc_url( $productImage['url'] ); ?>')"  >
			</div>
		</div>
	<?php endif; ?>
	<?php
		$section3 = get_field('troisieme_section');
		if( $section3 ): ?>
			<div class="blade-entry__custom-section alignwide">
				<?php echo $section3; ?>
			</div>
	<?php endif; ?>
	<?php get_template_part( 'template-parts/components/component-newsletter-block' ); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
