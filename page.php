<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package abbydylan
 */

get_header();
?>
	<main role="main" class="inner cover text-start">
		<?php
		//while ( have_posts() ) :
			//the_post();

			//get_template_part( 'template-parts/content', 'page' );

		//endwhile;
		// End of the loop.
		?>
    	<div class="home-title">
        	<h1 class="cover-heading lexend-regular">Abby Dylan</h1>
          	<p class="lead">Actor, Teacher, Arts Advocate</p>
          	<p class="lead">
            	<a href="docs/Abby-Dylan-LA-resume-Agent.pdf" target="_blank" class="btn btn-secondary lexend-regular">Acting Resume</a>
            	<a href="docs/Abby-Dylan-Teaching-Resume.pdf" target="_blank" class="btn btn-secondary lexend-regular">Teaching Resume</a>
          	</p>
        </div>
    </main><!-- #main -->

<?php
get_footer();
