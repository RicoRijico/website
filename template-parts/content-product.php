<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package camtoptec
 */

?>

<div class="col-xs-4 col-md-4">
    <div class="thumbnail">
        <a href="<?php echo get_the_permalink(); ?>">
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

            <div class="caption">
                <h4 class="title"><?php the_title(); ?></h4>
                <span class="price">$ <?php the_field( 'price' ); ?></span>
            </div>
        </a>

        <?php
            if ( is_category( '3' ) ) :
                the_field( 'specification' );
            endif;
        ?>
    </div>
</div>
