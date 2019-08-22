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
 * @package Yukia
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="page-section" id="services">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'page' );
							endwhile; // End of the loop.
							?>
						</div>
				</div>
			</div>
	</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
 