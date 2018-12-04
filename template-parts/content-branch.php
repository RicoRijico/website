<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package camtoptec
 */

?>

<div class="col-sm-3 col-md-3 show-grid-mb">
    <h3><?php the_title(); ?></h3>
    <p><?php the_field( 'address' ); ?></p>
    <p>លេខទូរស័ព្ទ៖ <?php the_field( 'phone_number' ); ?></p>
</div>