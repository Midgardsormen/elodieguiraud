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
	<div class="entry-content">
	
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
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
<div class="full-width-form">
        <div class="full-width-form__form-container visible">
            <div class="full-width-form__container-frame">
				<?php echo do_shortcode('[contact-form-7 id="179" title="Formulaire de contact"]'); ?>
            </div>
        </div>
    </div>