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

	<div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-1">
				<?php
					the_title( '<h2 class="pb-3 lexend-regular">', '</h2>' );
					the_content();
				?>
			</div><!-- .col-md-8 offset-md-2 -->
        </div><!-- .row -->
	</div><!-- .container -->
</article><!-- #post-<?php the_ID(); ?> -->
