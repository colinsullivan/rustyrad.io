<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package RustyRadio
 * @subpackage theme
 * @since Rusty Radio 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-listing'); ?>>
	<?php
		// Post thumbnail.
		//rustyradio_post_thumbnail();
	?>
  <?php
    the_title(
      sprintf('<p class="entry-title"><a href="%s" rel="bookmark"><span class="title">', esc_url( get_permalink() ) ),
      sprintf('</span><br /><span class="guests">%s</span></a></p>', get_post_custom_values("guests")[0])
    );
  ?>


</article><!-- #post-## -->
