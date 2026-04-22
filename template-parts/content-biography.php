<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abbydylan
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

		$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
					the_title( '<h2 class="pb-3 lexend-regular">', '</h2>' );
					
					if ( has_post_thumbnail() ) {
						echo '<img src="' . esc_url($featured_img_url) . '" alt="Abby Dylan" class="bio-headshot" />';
					}

					the_content();
				?>
			</div>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
