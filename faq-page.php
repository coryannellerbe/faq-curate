<?php
/**
 * Template Name: FAQ Page 
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">


<!-- #site-content -->

<div class="faq-container">
<?php
// Check rows exists.
if( have_rows('faq_repeater') ):

    // Loop through rows.
    while( have_rows('faq_repeater') ) : the_row();
    $icon = get_field('faq_icon');

?>
    <div class="faq-question-container">
        <div class="faq-icon">
        <?php
        // echo wp_get_attachment_image($icon, 'medium');
        ?>
        </div>

        <div class="faq-content">
            <div class="faq-question">
            <?php
            echo $sub_value = get_sub_field('question');
            ?>
            </div>
            <div class="faq-answer">
            <?php
            echo $sub_value = get_sub_field('answer');
            ?>
            </div>
        </div>
    </div>
    
    <?php
    endwhile;
endif;
?>
</div>

</main>

<?php get_footer(); ?>
