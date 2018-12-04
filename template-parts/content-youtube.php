<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package camtoptec
 */

?>

<div class="col-xs-6 col-md-3 show-grid">
    <div class="embed-responsive embed-responsive-16by9">
        <a href="<?php the_field( 'url' ); ?>" target="_blank">
            <?php if ( ! has_post_thumbnail() ) : ?>
                <img class="img-responsive" src="https://img.youtube.com/vi/<?php echo getYoutubeId( get_field( 'url' ) ); ?>/mqdefault.jpg" alt="<?php the_title(); ?>" />
            <?php else :
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
            ?>
                <img class="img-responsive" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>
        </a>
    </div>
</div>
