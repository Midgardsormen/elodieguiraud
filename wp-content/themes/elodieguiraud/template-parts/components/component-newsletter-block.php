<?php
/**
 * Template part for displaying block newsletter
 *
 *  * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php
$newsletter = get_field('bloc_newsletter');
if( $newsletter ): ?>
    <div id="newsletter" class="newsletter-block">
        <div class="newsletter-block__button-block wp-block-buttons 
        <?php
            $buttonAlign = $newsletter['alignement_du_bouton'];
            if( $buttonAlign =="Aligné à gauche" ): ?> is-content-justification-left
            <?php elseif ( $buttonAlign =="Centré" ): ?> is-content-justification-center
            <?php else: ?> is-content-justification-right
            <?php endif; ?>
            ">
            <div class="wp-block-button is-style-fill">
                <button class="wp-block-button__link js-newsletter-toggle"><?php echo $newsletter['label_du_bouton_dinscription_a_la_newsletter']; ?></button>
            </div>
        </div>
        <div class="newsletter-block__form-container">
            <div class="newsletter-block__container-frame">
                <div class="newsletter-block__form newsletter-block__form-description">
                <?php echo $newsletter['newsletter_description']; ?>
                </div>
                <?php echo do_shortcode('[sibwp_form id=1]') ;?>
            </div>
        </div>
    </div>
<?php endif; ?>
