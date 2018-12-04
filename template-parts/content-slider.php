<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package camtoptec
 */

global $sliders;

?>

<div id="main-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">

        <?php $slide_num = 0; ?>
        <?php while ( $sliders->have_posts() ) : $sliders->the_post(); ?>
            <li data-target="#main-carousel" data-slide-to="<?php echo $slide_num; ?>" class="<?php echo $slide_num == 0 ? 'active' : ''; ?>"></li>
        <?php $slide_num++; endwhile; ?>

    </ol>

    <div class="carousel-inner" role="listbox">

        <?php $slide_num = 0; ?>
        <?php while ( $sliders->have_posts() ) : $sliders->the_post(); ?>
            <div class="item <?php echo $slide_num == 0 ? 'active' : ''; ?>">
                <img src="<?php the_field( 'image' ) ?>" alt="<?php the_title(); ?>" />
            </div>
        <?php $slide_num++; endwhile; ?>

    </div>

    <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
