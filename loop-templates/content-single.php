<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php if (has_post_thumbnail()) :
            the_post_thumbnail('medium_large');
        endif; ?>

		<?php the_content(); ?>

		<?php
        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                'after'  => '</div>',
            )
        );
        ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->