<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package camtoptec
 */

global $category;

$url = z_taxonomy_image_url( $category->term_id );

?>

<li>
    <a href="<?php echo get_term_link( $category ); ?>">

        <?php if ( $url != '' ) : ?>

        <img src="<?php echo $url; ?>" alt="<?php echo $category->name; ?>" /> <span class="pull-right">( <?php echo $category->category_count; ?> គ្រឿង )</span>


        <?php else : ?>

        <?php echo $category->name; ?> <span class="pull-right">( <?php echo $category->category_count; ?> គ្រឿង )</span>

        <?php endif; ?>
    </a>
</li>
